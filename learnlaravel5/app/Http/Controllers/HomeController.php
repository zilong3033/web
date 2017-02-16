<?php namespace App\Http\Controllers;

use App\Article;

use DB;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $articles=DB::select('select * from articles order by id desc limit 5');
        $new_articles=DB::select('select * from articles order by id desc limit 6');
        $comments=DB::select('select * from comments order by id desc limit 3');
		return view('home')->with('articles',$articles)->with('new_articles',$new_articles)->with('comments',$comments);
	}

}
