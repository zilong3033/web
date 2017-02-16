<?php namespace App\Http\Controllers;

use App\Page;

use DB;

class rijiController extends Controller{
    
    public function index(){
        $new_articles=DB::select('select * from articles where id=(select max(id) from articles)limit 0,5');
        $comments=DB::select('select * from comments where id=(select max(id) from comments)limit 0,5');
        return view('riji')->with('pages',Page::all())->with('new_articles',$new_articles)->with('comments',$comments);
    }
} 
?>