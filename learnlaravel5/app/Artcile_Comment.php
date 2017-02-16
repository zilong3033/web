<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artcile_Comment extends Model {

	protected $fillable=['nickname','email','website','content','article_id'];

}
