<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SharetController extends Controller
{
    public function index(Request $request)
    {

        

        return view('logins.login');
    }
}
