<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AboutController extends Controller
{
    public function index(){

      return view('about.index');
    }
}
