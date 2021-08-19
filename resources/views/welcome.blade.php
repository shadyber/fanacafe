<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon.png">
    <title>FanaCafe -Digital Menu technology</title>

    <link rel="stylesheet" href="/css/materialize.css">
    <link rel="stylesheet" href="/css/loaders.css">
    <link rel="stylesheet" href="/css/lightbox.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>

<!-- preloader -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- end preloader -->

<!-- navbar -->
<div class="navbar navbar-home">
    <div class="container">
        <div class="row">
            <div class="col s3">
                <div class="content-left">
                    <a href="#slide-out" data-activates="slide-out" class="sidebar"><i class="fas fa-bars"></i></a>
                </div>
            </div>
            <div class="col s6">
                <div class="content-center">
                    <a href="index.html"><h1>FanaCafe</h1></a>
                </div>
            </div>
            <div class="col s3">
                <div class="content-right">
                    <div class="content-search">
                        <a href="#slide-out-right" data-activates="slide-out-right" class="sidebar-right-search">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                    <div class="content-cart">
                        <a href="#slide-out-cart" data-activates="slide-out-cart" class="sidebar-right-cart">
                            <i class="fas fa-shopping-cart"><sup>3</sup></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end navbar -->

<!-- sidebar left -->
<div class="sidebar-panel">
    <ul id="slide-out" class="collapsible side-nav">
        <li class="list-top">
            <div class="user-view">
                <div class="image">
                    <img src="images/logo.png" alt="">
                </div>
                <h3>FanaCafe</h3>
                <span>Mobile Template</span>
            </div>
        </li>
        <li><a href="index.html">Home</a></li>
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
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="index.html">Log Out</a></li>
    </ul>
</div>
<!-- end sidebar left -->

<!-- sidebar search -->
<div class="sidebar-panel sidebar-search">
    <ul id="slide-out-right" class="collapsible side-nav">
        <li>
            <div class="form">
                <input type="search"><button class="button"><i class="fas fa-search"></i></button>
            </div>
            <div class="clear"></div>
        </li>
        <li><h5>Popular Search</h5></li>
        <li><a href="">Juice</a></li>
        <li><a href="">Coffea</a></li>
        <li><a href="">Chicken</a></li>
        <li><a href="">Fried</a></li>
        <li><a href="">Stick</a></li>
        <li><a href="">Food</a></li>
        <li><a href="">Meat</a></li>
    </ul>
</div>
<!-- end sidebar search -->

<!-- sidebar cart -->
<div class="sidebar-panel sidebar-cart">
    <div id="slide-out-cart" class="collapsible side-nav">
        <div class="content">
            <div class="cart-img">
                <img src="images/product3.jpg" alt="">
            </div>
            <div class="cart-title">
                <a href="">Healty vegetables are full</a>
                <h5>$18</h5>
            </div>
            <div class="cart-remove">
                <a href=""><i class="fas fa-trash-alt"></i></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content">
            <div class="cart-img">
                <img src="images/product1.jpg" alt="">
            </div>
            <div class="cart-title">
                <a href="">Delicious thick noodles</a>
                <h5>$28</h5>
            </div>
            <div class="cart-remove">
                <a href=""><i class="fas fa-trash-alt"></i></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content">
            <div class="cart-img">
                <img src="images/product2.jpg" alt="">
            </div>
            <div class="cart-title">
                <a href="">Special chicken meat sauce</a>
                <h5>$32</h5>
            </div>
            <div class="cart-remove">
                <a href=""><i class="fas fa-trash-alt"></i></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="cart-button">
            <ul>
                <li>
                    <button class="button">View Cart</button>
                </li>
                <li>
                    <button class="button">Checkout</button>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar cart -->

<!-- slider -->
<div class="slide">
    <div class="slide-show owl-carousel owl-theme">
        <div class="content">
            <div class="mask"></div>
            <img src="images/slider1.jpg" alt="">
            <div class="caption">
                <h2>Welcome to <span>FanaCafe</span></h2>
                <p>Mobile Template</p>
            </div>
        </div>
        <div class="content">
            <div class="mask"></div>
            <img src="images/slider2.jpg" alt="">
            <div class="caption">
                <h2>Cassava Sauce</h2>
                <p>Mobile Template</p>
            </div>
        </div>
        <div class="content">
            <div class="mask"></div>
            <img src="images/slider3.jpg" alt="">
            <div class="caption">
                <h2>Roasted Meat</h2>
                <p>Mobile Template</p>
            </div>
        </div>
    </div>
</div>
<!-- end slider -->

<!-- features -->
<div class="features segments">
    <div class="container">
        <div class="row">
            <div class="col s4">
                <div class="content">
                    <i class="fas fa-wifi"></i>
                    <span>Free Wifi</span>
                </div>
            </div>
            <div class="col s4">
                <div class="content">
                    <i class="fas fa-leaf"></i>
                    <span>Clean</span>
                </div>
            </div>
            <div class="col s4">
                <div class="content">
                    <i class="fas fa-gift"></i>
                    <span>Get a Gift</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <div class="content">
                    <i class="fas fa-user-graduate"></i>
                    <span>Expert</span>
                </div>
            </div>
            <div class="col s4">
                <div class="content">
                    <i class="fas fa-globe"></i>
                    <span>Online</span>
                </div>
            </div>
            <div class="col s4">
                <div class="content">
                    <i class="fas fa-phone"></i>
                    <span>Support</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end features -->

<!-- product -->
<div class="product product-home segments">
    <div class="container">
        <div class="section-title">
            <h3>Product</h3>
        </div>
        @foreach($items->chunk(2)  as $chunk)
            <div class="row">
                @foreach($chunk as $item)
                    <div class="col s6">
                        <div class="content">
                            <a href="/item/{{$item->id}}">
                                <img src="/images/product1.jpg" alt="">
                                <p>{{$item->title}}</p>
                            </a>
                            <h5>$ETB {{$item->price}}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

    </div>
</div>
<!-- end product -->

<!-- latest news -->
<div class="latest-news segments">
    <div class="container">
        <div class="section-title">
            <h3>Latest News</h3>
        </div>
        <div class="row">
            <div class="col s5">
                <div class="content-image">
                    <img src="images/blog1.jpg" alt="">
                </div>
            </div>
            <div class="col s7">
                <div class="content-text">

                    <a href="blog-single.html"><p>Roasted meat and veggie combination</p></a>
                    <p class="date">Feb 05, 2019</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s5">
                <div class="content-image">
                    <img src="images/blog2.jpg" alt="">
                </div>
            </div>
            <div class="col s7">
                <div class="content-text">
                    <a href="blog-single.html"><p>Fried food for a very tasty side FanaCafe of rice</p></a>
                    <p class="date">Feb 11, 2019</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s5">
                <div class="content-image">
                    <img src="images/blog3.jpg" alt="">
                </div>
            </div>
            <div class="col s7">
                <div class="content-text">
                    <a href="blog-single.html"><p>Ruits that are suitable for your health</p></a>
                    <p class="date">March 23, 2019</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end latest news -->

<!-- reservation -->
<div class="reservation segments bg-second">
    <div class="container">
        <div class="content">
            <div class="section-title">
                <h3>Make a Reservation</h3>
            </div>
            <p>Consectetur adipisicing elit. Voluptates ipsam ad alias dolore, ea molestias esse. Similique sequi sint excepturi aspernatur, aliquam est! Dignissimos, consequatur vel ipsam quisquam quos enim!</p>
            <a href="booking.html" class="button">Reservation</a>
        </div>
    </div>
</div>
<!-- end reservation -->

<!-- footer -->
<footer>
    <div class="container">
        <div class="wrap-logo">
            <h3><img src="images/logo.png" alt="">FanaCafe</h3>
        </div>
        <div class="wrap-info">
            <ul>
                <li>North Western Chicago, United States</li>
                <li>+1 23 456 789</li>
                <li>example@domain.com</li>
            </ul>
        </div>
        <div class="wrap-social">
            <ul>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-google"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="footer-text">
            <p>Copyright © All Right Reserved</p>
        </div>
    </div>
</footer>
<!-- end footer -->

<script src="/js/jquery.min.js"></script>
<script src="/js/materialize.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>
