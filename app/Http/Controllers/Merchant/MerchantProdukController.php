<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Validator;
use App\Models\Produk;
use App\Models\Order;
use App\Models\Pembuatan;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Intervention\Image\Facades\Image;

class MerchantProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->user()->id;
        // $produks = Pembuatan::join('produks', 'pembuatans.produk_id', '=', 'produks.id')
        //                     ->join('users', 'produks.user_id', '=', 'users.id')
        //                     ->select('pembuatans.*', 'produks.nama_produk','produks.foto_produk','produks.harga', 'users.name')
        //                     ->where('produks.user_id', '=', $userId)
        //                     ->where('pembuatans.tanggal_jadi', '>=', now())
        //                     ->get();
        $produks = Pembuatan::join('produks', 'pembuatans.produk_id', '=', 'produks.id')
        ->join('users', 'produks.user_id', '=', 'users.id')
        ->where('pembuatans.tanggal_jadi', '!=', now())
        ->where('users.id', '=', auth()->user()->id)
        ->select('pembuatans.*', 'produks.nama_produk','produks.foto_produk','produks.harga', 'users.name' ,'users.id as id_user')
        ->get();
        // $produks = Produk::where('user_id', $userId)->get();
        $totalProducts = $produks->count();
        // dd($produks);
        return view('penjual.Products', compact('produks','totalProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjual.tambahProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'foto_produk' => 'image',
            'harga' => 'required',
            'tanggal_pembuatan' => 'required|date',
            'tanggal_jadi' => 'required|date',
            'deskripsi' => 'required|string'
        ]);
        
        
        
        // dd($validatedData);
        try {
            $produk = new Produk;
            $produk->nama_produk = $validatedData['nama_produk'];
            $produk->harga = $validatedData['harga'];
            $produk->deskripsi = $validatedData['deskripsi'];
            $produk->user_id = auth()->id(); 

            if ($request->hasFile('foto_produk') && $request->file('foto_produk')->isValid()) {
                // $validatedData['foto_produk'] = $request->file('foto_produk');
                $image = $request->file('foto_produk');
                // $filename = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(300, 200);
                $path = $image->store('post-images');

                // Resize the image to your desired dimensions (adjust as needed)

                $produk->foto_produk = $path;
            }
            $produk->save();
        
            $pembuatan = new Pembuatan;
            $pembuatan->produk_id = $produk->id;
            $pembuatan->tanggal_pembuatan = $validatedData['tanggal_pembuatan'];
            $pembuatan->tanggal_jadi = $validatedData['tanggal_jadi'];
            $pembuatan->save();
        
            return redirect('penjual/product')->with('success', 'Data berhasil disimpan.');
        } catch (QueryException $e) {
            return redirect('penjual/product')->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('penjual/product')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        // $pembuatan = Pembuatan::where('produk_id', $id)->firstOrFail();
        // dd($produk);
        return view('penjual.editProducts', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama_produk' => 'required|min:3|max:255',
            'foto_produk' => 'image',
            'harga' => 'required',
            'deskripsi' => 'required|string'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $validatedData['nama_produk'];
        $produk->harga = $validatedData['harga'];
        $produk->deskripsi = $validatedData['deskripsi'];

        if ($request->hasFile('foto_produk')) {
            $validatedData['foto_produk'] = $request->file('foto_produk')->store('post-images');
            $produk->foto_produk = $validatedData['foto_produk'];
            // Logic for image upload and update in the storage
            // For example: $path = $request->file('foto_produk')->store('product_images');
            // $produk->foto_produk = $path;
        }
        $produk->save();

        return redirect('penjual/product')->with('success', 'Data berhasil diupdate.'); // Replace 'your.route.name' with the actual route name

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $order = Order::where('pembuatan_id', '=', $id)
        ->get();
        $produk = Produk::join('pembuatans', 'pembuatans.produk_id', '=', 'produks.id')
        ->join('users', 'produks.user_id', '=', 'users.id')
        ->where('users.id', '=', auth()->user()->id)
        ->get();
        $produkcount = $produk->count();
        $pembuatan = Pembuatan::find($id);
        // dd($produk);
        try {
            if (!$order->isEmpty()) {
                return redirect('/penjual/product')->with('error', 'Data masih memiliki order.');
            } elseif( $order->isEmpty() && $produkcount > 1) {
                $pembuatan->delete();
                return redirect('/penjual/product')->with('success', 'Data berhasil dihapus.');
            }else{
                // dd($produkcount);
                $pembuatan->delete();
                $pembuatan->produk->delete();
                return redirect('/penjual/product')->with('success', 'Data berhasil dihapus.');
            }
            
            return redirect('/penjual/product')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect('/penjual/product')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
        
}
