<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    function index(){
        return view('homeUser.pages.services');
    }
}