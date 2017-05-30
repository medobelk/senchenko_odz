@extends('layouts.master')

@section('page_styles')

	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/avenue-product_view.css')}}">

@endsection

@section('content')

	<div class="body">
		
		
		
		<div class="container content">
			<div class="row">
				<div class="item-img col-lg-5">
					<img src="{{$item->imgage_path}}">
				</div>
				<div class="col-lg-7 product">
					<h3>{{$item->title}}</h3>						
					<ul class="item-misc">
						<li><i class="fa fa-star-o" aria-hidden="true"></i> 3 Review(s)</li>
						<li><a href="#">Add a Review</a></li>
						<!-- <li>Share </li> -->
					</ul>
					<p class="price"><!-- <span class="old-price">£107</span> -->  <span class="new-price">${{$item->price}}</span></p>
					<div class="item-info">
						<p>availability: <span class="availability">{{$item->availability}}</span></p>
						<!-- <p>Product Code: <span class="item-code">#499577</span></p> -->
						<p>Tags: 
						
						@foreach($item->tags()->get() as $tag)
							<a href="/tag/{{$tag->id}}">{{$tag->title}}</a>,
						@endforeach						
						</p>
					</div>
					<div class="item-description">
						<p>{{$item->description}}</p>
						<!-- <ul>
							<li>Elasticated cuffs</li>
							<li>Casual fit</li>
							<li>100% Cotton</li>
							<li>Free shipping with 4 days delivery</li>
						</ul> -->
					</div>
					<!-- <div class="item-properties clearfix">
						<div class="col-lg-4">
							<h4>colour</h4>
							<select>
								<option>Пункт 1</option>
  								<option>Пункт 2</option>
							</select>
						</div>
						<div class="col-lg-4">
							<h4>size</h4>
							<select>
								<option>Пункт 1</option>
  								<option>Пункт 2</option>
							</select>
						</div>
						<div class="col-lg-4">
							<h4>qty</h4>
							<select>
								<option>Пункт 1</option>
  								<option>Пункт 2</option>
							</select>
						</div>
					</div> -->
					<button class="btn btn-lg col-lg-5"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</button>
					<!-- <button class="btn btn-lg col-lg-6"><i class="fa fa-heart-o" aria-hidden="true"></i>add to lookbook</button> -->
					<!-- <p class="compare col-lg-12"><a href="#"><i class="fa fa-compress" aria-hidden="true"></i>add to compare</a></p>-->					
				</div>
				<div class="comments col-lg-12">
					<h3>Reviews: </h3>
					<div class="comment-new clearfix">
						<form method="POST" action="" >
							{{ csrf_field() }}
							<textarea class="comment-area col-lg-9" name="content"></textarea>
							<input class="btn btn-lg col-lg-2 comment-submit" type="submit" name="submit_comment" value="Add Comment">
						</form>
					</div>
					<br>
					@foreach($item->comments()->with('user')->get() as $comment)
						<div class="comment clearfix">
							<div class="col-lg-2">
								{{$comment->user->avatar_path}}
							</div>
							<div class="col-lg-10">
								<p>Posted by 
									<span class="comment-author"><a href="/user/{{ $comment->user->id }}"><b>{{$comment->user->name}}</b></a></span> 
									<span class="comment-date"><i>in {{ date("F jS, Y", strtotime($comment->created_at)) }}</i></span>
								</p>
								<span class="comment-content">{{$comment->content}}</span>
							</div>
							<hr>
						</div>						
					@endforeach	
				</div>
			</div>
		</div>
	</div>

@endsection