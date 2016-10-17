<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class systemController extends Controller
{
    public function index()
    {
      return view('admin.setting.index');
    }
    public function navadd()
    {
      return view('admin.setting.navadd');
    }
    public function navlist()
    {
      return view('admin.setting.navlist');
    }
}
