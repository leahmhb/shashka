<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horse_Progeny extends Model{
  public $table = "horses_progeny";
  public $timestamps = false;
  protected $fillable = array(
    'horse_id',
    'sire_id',
    'dam_id'
    );
  
}
