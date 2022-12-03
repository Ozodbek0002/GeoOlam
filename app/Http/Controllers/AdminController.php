<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
   function index(){
       $users = User::all();
       return view('admin.users.index',[
           'users'=>$users,
       ]);
   }


}
