<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
	/**
	* The comment repository instance
	* @var CommentRepository
	*/
	protected $comments;
    /**
    * Create a new controller instance
    * @param CommentRepository $comments
    * @return void
    */
    public function __construst(){
    	$this->middleware('auth'); // 'auth' is middleware
    	$this->comments = $comments;
    }
    /**
	* Display a list of all the user's comments
	* @param Request $request
	* @return Response 
    */
    public function index( Request $request ) {
    	// $comments = $request->user()->comments()->get();
    	return view('comments.index', [
    		// 'comments' => $comments,
    		'comments' => $this->comments->forUser($request->user()),
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
