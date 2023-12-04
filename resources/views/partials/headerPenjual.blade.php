<header class="shadow-1">
        <div class="px-4 my-auto justify-content-end d-flex w-100 ">
            <h2 class="my-auto me-3 d-inline text-white">{{ auth()->user()->name }}</h2>
            <img src="/img/icon_Profile white.svg" alt="Img Profile">
            <form action="/logout" method="post">
                @csrf
              <button type="submit" class="dropdown-item">Log Out</button>
            </form>
        </div>
</header>