<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();

    	return view('manage.user.index',['users'=>$users]);
    }
}
