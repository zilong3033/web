<?php  namespace App\Http\Controllers;

use App\Article;

use DB;

class ArticlesController extends Controller{
   
   public function show($id){
        $new_articles=DB::select('select * from articles order by id desc limit 6');
        $comments=DB::select('select * from comments order by id desc limit 3');
       return view('articles.show')->with('article',Article::find($id))->with('new_articles',$new_articles)->with('comments',$comments);
   }
}
?>