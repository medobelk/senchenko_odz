<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$user = User::find($id);
    	$comments = User::find($id)->comments()->get();

    	return view('user_page')->with(['user' => $user, 'comments' => $comments]);
    }
}
