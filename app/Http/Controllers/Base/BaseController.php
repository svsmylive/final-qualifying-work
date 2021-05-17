<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

}
