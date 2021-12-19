<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend;

class FrontendController extends Controller
{
    public function store()
    {
        $data=frontend::all();

        return view('home',['frontend'=>$data]);
    }
}
