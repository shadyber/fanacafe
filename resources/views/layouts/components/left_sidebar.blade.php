<!-- sidebar left -->
<div class="sidebar-panel">
    <ul id="slide-out" class="collapsible side-nav">
        <li class="list-top">
            <div class="user-view">
                <div class="image">
                    <img src="/images/logo.png" alt="">
                </div>
                <h3>Fana Cafe</h3>
                <span>Mobile </span>
            </div>
        </li>
        <li><a href="/">Home</a></li>
        <li>
            <div class="collapsible-header">
                FanaCafe Page<span><i class="fas fa-angle-right right"></i></span>
            </div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="product.html">Product</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                Pages<span><i class="fas fa-angle-right right"></i></span>
            </div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="pricing-table.html">Pricing Table</a></li>
                    <li><a href="page-not-found.html">Page Not Found</a></li>
                    <li><a href="coming-soon.html">Coming soon</a></li>
                    <li><a href="testimonial.html">Testimonial</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                Blog<span><i class="fas fa-angle-right right"></i></span>
            </div>
            <div class="collapsible-body">
                <ul>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
            </div>
        </li>
        <li><a href="contact.html">Contact us</a></li>

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


        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="index.html">Log Out</a></li>
    </ul>
</div>
<!-- end sidebar left -->
