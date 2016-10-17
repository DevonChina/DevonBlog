<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class articleController extends Controller
{
    public function index()
    {
      //
    }

    public function artadd()
    {
      return view('admin.article.articleadd');
    }

    public function artlist()
    {
      return view('admin.article.articlelist');
    }
}
