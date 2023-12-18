
<nav class="bg-white h-100 position-fixed p-xl-4 p-md-2 d-none d-md-block shadow-1">
  <a class="nav-link fs-2 fw-bold border-bottom d-flex justify-content-center my-xl-3 py-4" href="">
    <img src="/img/Logo_Pre-Order.svg" alt="Logo PreOrder" class="">
  </a>
  <div class="row ">
    <div class="col ">
      <a class="nav-link fs-1 fs-md-4 py-2" href="/penjual/">
        <div class="row align-items-center">
          <div class="col-4 d-flex justify-content-end">
            <img src="/img/icon_Monitor.svg" class="" alt="" width=40 class=""/>
          </div>
          <div class="col-8">
            <h5 class="">Dasboard</h5>
          </div>
        </div>
      </a>
      <a class="nav-link fs-1 py-2" href="/penjual/product">
        <div class="row align-items-center justify-content-center">
          <div class="col-4 d-flex justify-content-end">
            <img src="/img/icon_kart.svg" alt="" width=40 />
          </div>
          <div class="col-8 ">
            <h5 class="">Product</h5>
          </div>
        </div>
      </a>
      <a class="nav-link fs-1 py-2" href="/penjual/kelolaPesanan">
        <div class="row align-items-center justify-content-center">
          <div class="col-4 d-flex justify-content-end ">
            <img src="/img/icon_pesanan.svg" alt="" width=40 />      
          </div>
          <div class="col-8 ">
            <h5 class="">Pesanan</h5>
          </div>
        </div>
      </a>
      <a class="nav-link  py-2" href="/penjual/laporanBulanan">
        <div class="row align-items-center ">
          <div class="col-4  d-flex justify-content-end">
            <img src="/img/icon_money.svg" class="" alt="" width=40 class="my-auto"/>
          </div>
          <div class="col-8 ">
            <h5 class="">Laporan Bulanan</h5>
          </div>
        </div>
      </a>
      <a class="nav-link  py-2" href="/penjual/editPenjual/{{ auth()->user()->id }}">
        <div class="row align-items-center">
          <div class="col text-center align-items-center d-flex justify-content-end">
            <img src="/img/edit.svg" alt="" width=40 class=""/>
          </div>
          <div class="col-8">
            <h5 class="h-100">Edit Profile</h5>
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
