<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
    # code...
    $view =DB::table('users')->get();
    return view('Admin',compact('view'));
    }
}