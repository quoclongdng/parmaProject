<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bankController extends Controller
{
    public function index()
    {
        return view('Customer.bank');
    }
}
