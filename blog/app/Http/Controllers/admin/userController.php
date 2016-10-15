<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function userlist()
    {
      return view('admin.user_list');
    }

    public function add()
    {
      return view('admin.user_add');
    }
}
