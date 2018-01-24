<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        //エラーページを返却する
        App::abort(404);
        $date = 'test';
        return view('welcome')->with('date',$date);
        
    }
}
