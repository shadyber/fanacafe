

<!-- sidebar left -->
<div class="sidebar-panel">
    <ul id="slide-out" class="collapsible side-nav">
        <li class="list-top">
            <div class="user-view">
                <div class="image">
                    <img src="/images/logo.png" alt="">
                </div>
                <h3>FanaCafe</h3>
                <span>Mobile Template</span>
            </div>
        </li>
        <li><a href="/">Home</a></li>
        <li>
            <div class="collapsible-header">
                FanaCafe Page<span><i class="fas fa-angle-right right"></i></span>
            </div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="/item">Product</a></li>
                    <li><a href="/item/1">Product Details</a></li>
                    <li><a href="/myycart">Cart</a></li>
                    <li><a href="/checkout">Checkout</a></li>
                    <li><a href="/myreservation">Reservation</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                </ul>
            </div>
        </li>

        <li>
            <div class="collapsible-header">
                Blog<span><i class="fas fa-angle-right right"></i></span>
            </div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/blog/">Blog Single</a></li>
                </ul>
            </div>
        </li>
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </ul>
</div>
<!-- end sidebar left -->
