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
    	$comments = $request->user()->comments()->get();
    	return view('comments.index', [
    		'comments' => $comments,
    	]);
    }

    /**
    * Create a new comment
    * @param Request $request
    * @return Response
    */
    public function store( Request $request ) {
    	$this->validate( @request, [
    		'comment' => 'required|max:200',
    	]);

    	$request->user()->comments()->create([
    		'comment' => $request->comment,
    	]);

    	return redirect('/comments');
    }
}
