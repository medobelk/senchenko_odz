<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index($id){
    	$tag = Tag::find($id);
    	$items = $tag->items()->get();
    	return view('tag', ['tag' => $tag, 'items' => $items]);
    }
}
