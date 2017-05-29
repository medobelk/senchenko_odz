@extends('layouts.master')

@section('page_styles')

<link rel="stylesheet" type="text/css" href="css/avenue-home.css">

@endsection

@section('content')

    <div class="body">
        <!-- <div class="container-fluid">
            <div class="row">
                <div class="slider col-lg-12">
                    <img src="#" alt="slider">
                </div>
            </div>
        </div> -->

        <div class="body">
            <div class="container">
                <div class="row">
                    <div class="home-nav col-lg-12 filter">
                        <ul class="nav nav-pills">
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">Coming Soon</a></li>
                        </ul>
                    </div>                    
                </div>                
                <div class="row gallery">
                @foreach($items as $item)
                    <div class="col-lg-3">
                        <div class="gallery-price">
                            <a href="/product_view/{{$item->id}}">
                                <img src="{{$item->image_path}}">
                            </a>
                            <p class="price">${{$item->price}}</p>
                            <div class="item-info">
                                <h5>{{$item->title}}</h5>
                                <p>{{$item->description}}</p>
                                <!-- <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a> -->
                            </div>
                            
                        </div>
                    </div>
                @endforeach
                    <!-- <div class="col-lg-6 pull-right">
                        <div class="gallery-price">
                            <img src="{{asset('img').'/gallery-img-lg-1.png'}}">
                            <p class="price">£89.99</p>
                            <div class="item-info">
                                <h5>Womens burnt orange casual tee  £29.95</h5>
                                <p>
                                    Classic casual t-shirt for women on the move. 100% cotton. A hard-wearing sports t-shirt with microvent technology.
                                </p>
                                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a>
                            </div>
                            <div class="thumbs col-lg-4">
                                <img src="img/thumb-front.png">
                                <img src="img/thumb-back.png">
                            </div>
                            <button class="item-info-btn"></button>
                        </div>
                    </div>   -->
                </div>
                <div class="row ">
                    <div class="col-lg-12 bottom-divider">
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- <div class="container-fluid lookbooks">
                <div class="row lookbookss">
                    <div class="lookbook">                    
                        <img class="pull-left" src="{{asset('img').'/lookbook-men.png'}}">
                        <h3>men’s lookbook</h3>
                        <p>
                            Lorem ipsum dolor sit amet eras facilisis consectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui. Elementum metus facilisis ut phasellu.
                        </p>
                        <button class="btn btn-default">View Now</button>
                    </div>
                    <div class="lookbook">
                        <img class="pull-left" src="img/lookbook-woomen.png">
                        <h3>men’s lookbook</h3>
                        <p>
                            Lorem ipsum dolor sit amet eras facilisis consectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui. Elementum metus facilisis ut phasellu.
                        </p>
                        <button class="btn btn-default">View Now</button>
                    </div>
                    <div class="lookbook">
                        <img class="pull-left" src="img/lookbook-you.png">
                        <h3>men’s lookbook</h3>
                        <p>
                            Lorem ipsum dolor sit amet eras facilisis consectetur adipiscing elit lor, integer lorem consecteur dignissim laciniqui. Elementum metus facilisis ut phasellu.
                        </p>
                        <button class="btn btn-default">View Now</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

@endsection        
