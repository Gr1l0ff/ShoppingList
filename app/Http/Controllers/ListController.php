<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Lists;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
  public function index(){

    $lists =  DB::table('lists')
    ->join('items', 'items.id', '=', 'lists.item_id')
            ->select('lists.*', 'items.name', 'items.price')
            ->get();

    // dd($lists);

    return view('list.index')->with('data', $lists);
    
  }
  public function store($id){

    $item = Items::findOrFail($id);
    
    DB::table('lists')->insert([
      'user_id' => Auth::user()->id,
      'item_id' => $id,
      'created_at' => date('Y-m-d'),
      'updated_at' => date('Y-m-d')

      
  ] );
  
 
    
     
    return redirect()->back();
  }
}
