<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	public function hasManyComments(){
        return $this->hasMany('App\Artcile_Comment','article_id','id');
    }

}
