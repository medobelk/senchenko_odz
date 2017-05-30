@extends('layouts.master')

@section('page_styles')

<link rel="stylesheet" type="text/css" href="{{URL::asset('css/avenue-user_page.css')}}">

@endsection

@section('content')

    <div class="body">
    	<div class="container">
	    	<div class="row ">
	    		<div class="user-info clearfix">
		    		<div class="col-lg-4">
		    			<img src="{{asset('img').'/user.png'}}">
		    		</div>
		    		<div class="col-lg-8">
		    			<h3>{{ $user->name }}</h3>
		    			<p>E-mail: {{ $user->email }}</p>
		    			<p>About me: Lorem ipsum dolor sit amet, consectetur adipisicing elit. In adipisci animi neque numquam corporis? Aperiam, amet fugit. Temporibus accusantium, vel unde totam, at facilis placeat illum expedita vitae laudantium excepturi.</p>
		    			<div class="comments">
		    				@if( empty($comments) )
								<h4>Your Comments:</h4>	
							@else
								<h4>You Didnt Post Any Comment</h4>
							@endif
		    				@foreach($comments as $comment)		    					
								<p>Posted at {{ date("F jS, Y", strtotime($comment->created_at)) }}</p>
								<span>{{ $comment->content }}</span>
		    				@endforeach
		    			</div>
		    		</div>
		    	</div>
	    	</div>
    	</div>
    </div>
@endsection        