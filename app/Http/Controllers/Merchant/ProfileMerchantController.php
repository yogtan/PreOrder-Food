<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\ProfileMerchant;
use App\Models\User;
use App\Http\Requests\StoreProfileMerchantRequest;
use App\Http\Requests\UpdateProfileMerchantRequest;
use Illuminate\Validation\ValidationException;

class ProfileMerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return view('penjual.editPenjual', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileMerchantRequest $request)
    {
    try {
        $validatedData = $request->validate([
            'header' => 'image|required',
            'nama_bank' => 'required|string|max:255',
            'rekening' => 'required',
            'deskripsi' => 'required|string|required'
        ]);

        $validatedData['user_id'] = $request->input('user_id');

        if ($request->hasFile('header') && $request->file('header')->isValid()) {
            $validatedData['header'] = $request->file('header')->store('post-images');
        }

        $profile = ProfileMerchant::where('user_id', $validatedData['user_id'])->first();

        if (!$profile) {
            $profile = new ProfileMerchant;
            $profile->user_id = $validatedData['user_id'];
        }

        $profile->header = $validatedData['header'];
        $profile->nama_bank = $validatedData['nama_bank'];
        $profile->rekening = $validatedData['rekening'];
        $profile->deskripsi = $validatedData['deskripsi'];
        $profile->save();

        return redirect('/penjual')->with('success', 'Edit data Success!');
    } catch (ValidationException $e) {
        // Handle validation errors
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        // Handle other exceptions
        return redirect()->back()->with('error', 'An error occurred during data editing.');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfileMerchant $profileMerchant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfileMerchant $profileMerchant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileMerchantRequest $request, ProfileMerchant $profileMerchant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileMerchant $profileMerchant)
    {
        //
    }
}
