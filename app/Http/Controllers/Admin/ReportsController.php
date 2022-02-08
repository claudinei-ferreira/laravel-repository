<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    
    public function vue()
    {
        return "vue";
    }

    public function year()
    {
        return "year";
    }

    public function months()
    {
        return "months";
    }

}
