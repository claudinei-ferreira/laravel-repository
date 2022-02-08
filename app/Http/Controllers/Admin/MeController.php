<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeController extends Controller
{

    public function index()
    {
        return view('admin.me.index');
    }

    public function update(Request $request)
    {

    }


}
