@extends('layouts.app')
@section('content')

    <div class="product-details segments-page">
        <div class="container">
            <div class="wrap-content">
                <div class="product-d-slide owl-carousel owl-theme">
                    <div class="content">
                        <img src="/images/product1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="/images/product2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="/images/product3.jpg" alt="">
                    </div>
                </div>
                <div class="desc-short">
                    <h4>{{$item->title}}</h4>
                    <h5>$ETB {{$item->price}}</h5>
                    <p>{{$item->detail}}</p>
                    <button class="button"><i class="fas fa-shopping-cart"></i> Add to cart</button>
                </div>
            </div>
            <div class="wrap-info">
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a class="active" href="#tabs1">Details</a></li>
                            <li class="tab col s3"><a href="#tabs2">Reviews</a></li>
                        </ul>
                    </div>
                    <div id="tabs1" class="col s12">
                        <div class="content-tabs">
                            <div class="details">
                                <div class="wrap-title">
                                    <h5>Description</h5>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, asperiores facere cum? Unde, quia eligendi iure deserunt ea ipsam consequatur, obcaecati nostrum similique fugiat suscipit sint aliquam</p>
                            </div>
                        </div>
                    </div>
                    <div id="tabs2" class="col s12">
                        <div class="content-tabs">
                            <div class="comment-people">
                                <div class="content no-pt">
                                    <div class="image">
                                        <img src="images/testimonial1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h5>Kiyandra</h5>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sequi</p>
                                        <p class="date">12 Jan, 2018<span><i class="fas fa-reply"></i>Reply</span></p>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="image">
                                        <img src="images/testimonial2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h5>Starla</h5>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sequi</p>
                                        <p class="date">12 Jan, 2018<span><i class="fas fa-reply"></i>Reply</span></p>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="image">
                                        <img src="images/testimonial3.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h5>Princella</h5>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sequi</p>
                                        <p class="date">12 Jan, 2018<span><i class="fas fa-reply"></i>Reply</span></p>
                                    </div>
                                </div>
                                <div class="content no-bb">
                                    <div class="image">
                                        <img src="images/testimonial2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h5>Jennifer</h5>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sequi</p>
                                        <p class="date">12 Jan, 2018<span><i class="fas fa-reply"></i>Reply</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-form">
                <div class="wrap-title">
                    <h5>Leave Your Reply</h5>
                </div>
                <form>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <textarea cols="30" rows="10" placeholder="Message"></textarea>
                    <button class="button">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end product details -->


@endsection
