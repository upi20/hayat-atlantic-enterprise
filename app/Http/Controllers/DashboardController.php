<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $page_attr = ['title' => 'Dashboard'];
        return view('member.dashborard');
    }
}
