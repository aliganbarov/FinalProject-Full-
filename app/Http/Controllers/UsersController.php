<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class UsersController extends Controller
{
    public function login() {
    	return view('users.login');
    }

    public function settings() {
    	$user = Auth::user();
    	return view('users.settings');
    }

    public function profile() {
    	return view('users.profile');
    }

}
