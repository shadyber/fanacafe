@extends('layouts.app')
@section('title','Products ')
@section('content')
    <div class="product segments-page">

        <div class="container">

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
            <div class="row">
                <div class="col s6">
                    <div class="content">
                        <a href="product-details.html">
                            <img src="/images/product3.jpg" alt="">
                            <p>Soy sauce grilled meat</p>
                        </a>
                        <h5>$32</h5>
                    </div>
                </div>
                <div class="col s6">
                    <div class="content">
                        <a href="product-details.html">
                            <img src="/images/product4.jpg" alt="">
                            <p>Healthy vegetables are full</p>
                        </a>
                        <h5>$18</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="content">
                        <a href="product-details.html">
                            <img src="/images/product5.jpg" alt="">
                            <p>Delicious healthy juices</p>
                        </a>
                        <h5>$16</h5>
                    </div>
                </div>
                <div class="col s6">
                    <div class="content">
                        <a href="product-details.html">
                            <img src="/images/product6.jpg" alt="">
                            <p>Sleepy relieving coffee</p>
                        </a>
                        <h5>$12</h5>
                    </div>
                </div>
            </div>
            <div class="pagination pagination-circle">
                <ul>
                    <li class="disabled"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
