<div class="container my-3">
    <div class="d-flex flex-row">
        <div class="col-12 px-0">
            <div class="d-flex flex-row align-items-center">
                <div class="col-1 pl-0">
                    <form action="{{ route('products.index') }}" method="get">
                        <button class="btn btn-primary font-weight-bold">Trang chủ</button>
                    </form>
                </div>
                <div class="col-10">
                    <h1 class="text-center font-weight-bold text-uppercase">crud laravel</h1>
                </div>
                <div class="col-1">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
