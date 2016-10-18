<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class blogController extends Controller
{
    public function index()
    {
      return view('home.blog.index');
    }

    public function article()
    {
      return view('home.blog.article');
    }
}
