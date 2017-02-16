<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Artcile_Comment;

use Redirect,Input;

class Articles_CommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.articles_comments.index')->witharticles_comments(Artcile_Comment::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.articles_comments.edit')->withcomment(Artcile_Comment::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$this->validate($request,[
            'nickname'=>'required',
            'content'=>'required',
        ]);
        if(Artcile_Comment::where('id',$id)->update(Input::except(['_method','_token']))){
            return Redirect::to('admin/articles_comments');    
        }else{
            return Redirect::back()->withInput()->withErrors('更新失败!');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comment=Artcile_Comment::find($id);
        $comment->delete();
        return Redirect::to('admin/articles_comments');
	}

}
