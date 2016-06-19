<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
    //
    public function __construst(){
    	$this->middleware('auth'); // 'auth' is middleware
    }

    public function index( Request $request ) {
    	return view('comments.index');
    }
}
