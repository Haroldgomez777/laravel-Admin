<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('ad');
	}


    public function index()
    {
    	$users = App\User::paginate(15);

    	return view('admin.home', compact('users'));
    }

    public function create()
    {
    	
    }
}
