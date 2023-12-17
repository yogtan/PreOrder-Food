
<nav class="bg-white border h-100 position-fixed p-xl-4 p-md-2 d-none d-md-block">
  <a class="nav-link fs-2 fw-bold border-bottom  text-center my-xl-3 border" href="">
    <img src="/img/Logo_Pre-Order.svg" alt="Logo PreOrder" class="border">
  </a>
  <div class="row border border-primary">
    <div class="col border border-danger">
      <a class="nav-link fs-1 fs-md-4 text-center" href="/penjual/">
        <div class="row border border-primary align-items-center">
          <div class="col-4 border">
            <img src="/img/icon_Monitor.svg" class="" alt="" width=40 class=""/>
          </div>
          <div class="col-8 border">
            <h3 class="">Dasboard</h3>
          </div>
        </div>
      </a>
      <a class="nav-link fs-1 text-center" href="/penjual/product">
        <div class="row align-items-center justify-content-center">
          <div class="col-4 border">
            <img src="/img/icon_kart.svg" alt="" width=40 />
          </div>
          <div class="col-8">
            <h3 class="">Product</h3>
          </div>
        </div>
      </a>
      <a class="nav-link fs-1 text-center" href="/penjual/kelolaPesanan">
        <div class="row align-items-center justify-content-center">
          <div class="col-4 border">
            <img src="/img/icon_pesanan.svg" alt="" width=40 />      
          </div>
          <div class="col-8 border">
            <h3 class="">Pesanan</h3>
          </div>
        </div>
      </a>
      <a class="nav-link text-center " href="/penjual/laporanBulanan">
        <div class="row align-items-center ">
          <div class="col-4 border ">
            <img src="/img/icon_money.svg" class="border" alt="" width=40 class="my-auto"/>
          </div>
          <div class="col-8 border">
            <h3 class="border">Laporan Bulanan</h3>
          </div>
        </div>
      </a>
      <a class="nav-link text-center " href="/penjual/editPenjual/{{ auth()->user()->id }}">
        <div class="row align-items-center">
          <div class="col border align-items-center d-flex justify-content-center">
            <img src="/img/edit.svg" alt="" width=40 class=""/>
          </div>
          <div class="col-8">
            <h3 class="h-100">Edit Profile</h3>
          </div>
        </div>
      </a>
    </div>
  </div>
</nav>


<!-- for mobile -->
<div class="offcanvas-lg offcanvas-end d-md-none" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
  <div class="container">
    <div class="offcanvas-header">
      <img src="/img/icon_Profile.svg" alt="Img Profile" width="50" class="d-block">
      <div class="btn-group text-secondary border ">
            <h5 class=" d-block h-auto text-center my-auto" style="width:175px;">{{ auth()->user()->name }}</h5>
              <!-- {{-- <button type="button" class="btn my-auto me-3 d-inline text-white">Welcome, {{ auth()->user()->name }}</button> --}} -->
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split h-100" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/penjual">home</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                    @csrf
                  <button type="submit" class="dropdown-item">Log Out</button>
                </form>
             </li>
           </ul>
        </div>      
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
    </div>
    <hr class="border-b-2">
    <div class="offcanvas-body">
      <ul class="navbar-nav">
        <li class="">
          <a href="/penjual/" class="text-decoration-none text-secondary">
            <div class="row align-items-center">
              <div class="col-2">
                <img src="/img/icon_Monitor.svg" class="" alt="" width=40 class=""/>
              </div>
              <div class="col-6">
                <h3 class="text-left">Dasboard</h3>
              </div>
            </div>
          </a>
        </li>
        <li class="mt-3">
          <a href="/penjual/product" class="text-decoration-none text-secondary">
            <div class="row align-items-center ">
              <div class="col-2">
                <img src="/img/icon_kart.svg" alt="" width=40 />
              </div>
              <div class="col-6">
                <h3 class=" text-left">Product</h3>
              </div>
            </div>
          </a>
        </li>
        <li>
        <li class="mt-3">
          <a href="/penjual/kelolaPesanan" class="text-decoration-none text-secondary">
            <div class="row align-items-center ">
              <div class="col-2">
                <img src="/img/icon_pesanan.svg" alt="" width=40 />      
              </div>
              <div class="col-8">
                <h2 class=" text-left">Pesanan</h2>
              </div>
            </div>
          </a>
        </li>
        <li class="mt-3">
          <a href="/penjual/laporanBulanan" class="text-decoration-none text-secondary">
            <div class="row align-items-center ">
              <div class="col-2">
                <img src="/img/icon_money.svg" class="border" alt="" width=40 class="my-auto"/>
              </div>
              <div class="col-8">
                <h2 class=" text-left">Laporan Bulanan</h2>
              </div>
            </div>
          </a>
        </li>
        <li class="mt-3">
          <a href="/penjual/editPenjual/{{ auth()->user()->id }}" class="text-decoration-none text-secondary">
            <div class="row align-items-center ">
              <div class="col-2">
                <img src="/img/edit.svg" alt="" width=40 class=""/>
              </div>
              <div class="col-6">
                <h3 class="text-left">Edit Profile</h3>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
