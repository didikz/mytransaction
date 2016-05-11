<?php

namespace Mytransaction\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Mytransaction\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {

    }

    public function getLogout()
    {

    }
}
