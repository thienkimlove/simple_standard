<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

}
