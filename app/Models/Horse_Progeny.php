<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horse_Progeny extends Model{
  public $table = "horses_progeny";
  protected $fillable = array(
    'horse_id',
    'horse_name',
    'horse_link',
    'sire_id',
    'sire_name',
    'sire_link',
    'dam_id',
    'dam_name',
    'dam_link'
    );
}
