<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function donate()
    {
        return view('donate');
    }
    public function news()
    {
        return view('news');
    }
    public function news_detail()
    {
        return view('news_detail');
    }
}
