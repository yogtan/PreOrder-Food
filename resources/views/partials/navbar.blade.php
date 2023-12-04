<nav id="myNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-lg d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="/">
            <img style="width: 180px" src="/img/Logo_Pre-Order.svg" alt="LogoPre_Order" width="50" class="me-2">
        </a>
        <form class="search-form form-inline my-2 my-lg-0 mx-auto">
            <div class="search-container">
                <img src="/img/icon_search.svg" alt="Search Icon" class="search-icon">
                <input class="form-control mr-sm-2 search-input" type="search"
                    placeholder="Pre-order makanan apa ya hari ini?" aria-label="Search">
            </div>
        </form>
        @auth
        <div class="history his-link">
            <a href="history" class="his-link">Purchase History</a>
        </div>
        <div class="btn-group">
            <button type="button" class="btn">Welcome, {{ auth()->user()->name }}</button>
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/home">Action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                <button type="submit" class="dropdown-item">Log Out</button>
              </form>
            </li>
            </ul>
          </div>
          @else
            <div class="btn-container">
                <button onclick="toggleDropdown()" class="btn">Masuk/Daftar</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="/login">Login</a>
                    <a href="/register-merchant" onclick="selectOption('Merchant')">Merchant</a>
                    <a href="/register" onclick="selectOption('Customer')">Customer</a>
                </div>
            </div>
        @endauth
    </div>
</nav>

<script>
    window.onclick = function(event) {
        if (!event.target.matches('.btn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    function toggleDropdown() {
        var dropdown = document.getElementById("myDropdown");
        dropdown.classList.toggle("show");
    }

</script>
