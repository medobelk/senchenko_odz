@extends('layouts.master')

@section('page_styles')

<link rel="stylesheet" type="text/css" href="css/avenue-product_view.css">

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
                <div class="row gallery">
                <h2>Items Filtered By Tag: {{$tag->title}}</h2>
                @foreach($items as $item)
                    <div class="col-lg-3">
                        <div class="gallery-price">
                            <a href="/product_view/{{$item->id}}">
                                <img src="{{$item->image_path}}">
                            </a>
                            <p class="price">{{$item->price}}</p>
                            <div class="item-info">
                                <h5>{{$item->title}}</h5>
                                <p>{{$item->description}}</p>
                            </div>                            
                        </div>
                    </div>
                @endforeach
                </div>            
            </div>        
        </div>
    </div>

@endsection        
