<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AntoineController extends Controller
{
    public function index(){
        return view('antoine.index');
    }
}
