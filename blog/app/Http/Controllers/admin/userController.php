<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function userlist()
    {
      return view('admin.user.user_list');
    }

    public function add()
    {
      return view('admin.user.user_add');
    }

    public function listvip()
    {
      return view('admin.user.user_vip');
    }

    public function manageradd()
    {
      return view('admin.user.user_manager');
    }

    public function managerlist()
    {
      return view('admin.user.user_managerlist');
    }
}
