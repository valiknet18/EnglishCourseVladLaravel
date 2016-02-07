<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function loginAction(Request $request)
    {
        return view('admin.auth.login');
    }

    public function authenticateAction(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return response()->redirectToIntended(action('Admin\HomeController@dashboardAction'));
        }

        return redirect(action('Admin\HomeController@loginAction'));
    }

    public function dashboardAction()
    {
        return view('admin.dashboard');
    }
}
