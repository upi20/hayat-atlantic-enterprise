<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::check()) {
            return Redirect::route('dashboard');
        }
        $page_attr = ['title' => 'Login'];
        return view('auth.login', compact('page_attr'));
    }

    public function index_old()
    {
        if (Auth::check()) {
            return Redirect::route('dashboard');
        }
        $page_attr = ['title' => 'Login'];
        return view('auth.login', compact('page_attr'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function check_login(Request $request)
    {
        $nik      = $request->input('nik');
        $password   = $request->input('password');

        if (Auth::guard('web')->attempt(['email' => $nik, 'password' => $password, 'active' => 1])) {
            return response()->json(['success' => true], 200);
        } else if (Auth::guard('web')->attempt(['nik' => $nik, 'password' => $password, 'active' => 1])) {
            return response()->json(['success' => true], 200);
        } else if (Auth::guard('web')->attempt(['username' => $nik, 'password' => $password, 'active' => 1])) {
            return response()->json(['success' => true], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Failed! Please re-check your email and password!'
            ], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect()->route('home');
    }
}
