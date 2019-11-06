<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GenericPagesController extends Controller
{
		public function welcome()
    {
        return view('welcome');
    }
		
		public function sponsors()
    {
        return view('pages.sponsors');
    }
		
		public function test()
    {
        return view('pages.test');
    }
}
