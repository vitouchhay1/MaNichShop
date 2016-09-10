<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}
    function index(){
    	return view('admins.index');
    } 
}
