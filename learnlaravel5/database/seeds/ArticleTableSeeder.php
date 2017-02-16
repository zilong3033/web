<?php
use Illuminate\Database\Seeder;

use App\Article;

class ArticleTableSeeder extends Seeder{
    public function run()
    {
        DB::table('articles')->delete();
        for($i=0;$i<5;$i++){
            Article::create([
                'title'=>'Article'.$i,
                'slug'=>'first-page',
                'body'=>'content'.$i,
                'image'=>'../images/'.$i.'.jpg',
                'user_id'=>2,
            ]);
        }
    }
}
?>