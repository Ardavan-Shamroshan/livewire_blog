<header class="container-fluid bg-light shadow sticky-top py-1 w_100vw">
    <div class="row m-0 justify-content-between w-100 align-items-center">
        <ul class="d-flex menu_top align-items-center">
            <li class="logo_top animate__animated animate__flip">
                <img src="/assets/images/logo.png" />
            </li>

            <li class="mx-3 cursor_pointer_text_shadow font_1_1">
               <a href="{{ route('blog.search') }}"> مقالات</a>
            </li>
            <li class="mx-3 cursor_pointer_text_shadow font_1_1">
                درباره ما
            </li>
            @guest
            <li class="mx-3 cursor_pointer_text_shadow font_1_1">
                <a href="{{ route('auth.login') }}">ورود</a>
            </li>
            <li class="mx-3 cursor_pointer_text_shadow font_1_1">

                <a href="{{ route('auth.register') }}">ثبت نام</a>
            </li>
            @endguest
            @auth
            <li class="mx-3 cursor_pointer_text_shadow font_1_1">
                {{ auth()->user()->email }}
            </li>
            <li><a href="" wire:click="logout">خروج</a></li>
            @endauth
            <li class="d-block d-md-none mx-4">
                <a href="/" class="fas fa-search fa-2x cursor_pointer_text_shadow "></a>
            </li>
        </ul>
        <div class="col-12 col-md-4 form-group search_box  d-none d-md-block">
            <input type="text" class="form-control rounded_5 placeholder_gray shadow-sm" placeholder="دنبال چی می گردی؟"
                wire:model="search" />
            <a href="{{ route('blog.search', ['category' => 0,'search' => $search]) }}" class="fas fa-search search_btn"
                wire:loading.class='disable-link'></a>
        </div>
    </div>
</header>
