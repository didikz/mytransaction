<?php

namespace Mytransaction\Http\Controllers\Backpanel;

use Illuminate\Http\Request;

use Mytransaction\Http\Requests;
use Mytransaction\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('dashboards.index');
    }
}
