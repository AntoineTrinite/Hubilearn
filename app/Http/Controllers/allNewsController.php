<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class allNewsController extends Controller
{
    public function index(){
        return view('allnews', [
            'news' => News::all()
        ]);
    }
}
