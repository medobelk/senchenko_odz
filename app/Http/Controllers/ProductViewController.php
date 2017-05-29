<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

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

}
