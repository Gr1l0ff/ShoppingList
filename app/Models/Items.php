<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'type',
      'price'
      
  ];
  
  public function item()
  {
      return $this->belongsTo(Items::class);
  }

}
