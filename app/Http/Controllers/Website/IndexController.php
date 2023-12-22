<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        try {
            return view('website.index');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
