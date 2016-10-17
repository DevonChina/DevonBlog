<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
    public function index()
    {
      //
    }
    public function pageadd()
    {
      return view('admin.page.pageadd');
    }

    public function pagelist()
    {
      return view('admin.page.pagelist');
    }
}
