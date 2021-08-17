<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
  public function index(){

    return view('items.index');
    
  }
  public function store(Request $request){


    // dd($request);
    $validated = $request->validate([

      'name' => 'required',
      'type' => 'required',
      'price' => 'required'

      
    ]);

    

    $user = Items::create([
      'name' => $request->name,
      'type' => $request->type,
      'price' => $request->price
    
    ]);

    return redirect('/');
    
    
  }
  public function search(){


    $items =  DB::table('items')->get();
    
    return json_encode($items);
    
  }
}
