<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $date = 'test';
        return view('welcome')->with('date',$date);
        //エラーページを返却する
        //App::abort(404);
    }
}
