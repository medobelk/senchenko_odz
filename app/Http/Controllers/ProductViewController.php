<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Item;
use App\Comment;

class ProductViewController extends Controller
{
 	
	public function __construct()
    {
        $this->middleware('auth');
    }
 	
	public function index($id){

		$item = Item::find($id);
		
		return view('product_view')->with('item', $item);
	}

	public function addComment(Request $request, $id)
	{
		$comment = new Comment;

		$comment->content = $request->content;
		$comment->item_id = $id;
		$comment->user_id = Auth::user()->id;
		$comment->save();

		$item = Item::find($id);
		return view('product_view')->with('item', $item);
	}
}
