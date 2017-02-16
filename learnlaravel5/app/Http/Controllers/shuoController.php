<?php namespace App\Http\Controllers;

use App\Page;

class shuoController extends Controller{
    
    public function index(){
        return view('shuo')->with('pages',Page::all());
    }
}