<header class="shadow-1">
        <div class="px-4 my-auto justify-content-end d-flex w-100 ">
          <div class="btn-group">
            <h2 class="my-auto me-3 d-inline text-white">{{ auth()->user()->name }}</h2>
            {{-- <button type="button" class="btn my-auto me-3 d-inline text-white">Welcome, {{ auth()->user()->name }}</button> --}}
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
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
            
            {{-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/home">Action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                <button type="submit" class="dropdown-item">Log Out</button>
              </form>
            </li>
            </ul> --}}
            <img src="/img/icon_Profile white.svg" alt="Img Profile">
        </div>
</header>