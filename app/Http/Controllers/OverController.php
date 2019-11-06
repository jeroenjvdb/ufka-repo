<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Praesidium_member;

class OverController extends Controller
{
    public function index()
    {
        $members = Praesidium_member::all();
        
        return view('pages.over', compact('members'));
    }
}
