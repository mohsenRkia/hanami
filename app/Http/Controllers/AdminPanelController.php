<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function dashboard()
    {

        return view('admin.index');
    }
}
