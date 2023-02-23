<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;

class DashboardController extends Controller
{

    public  function index()
    {
        return view('admin.dashboard');
    }
}
