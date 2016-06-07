<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lineage extends Model{
  public $table = "lineages";
  public $timestamps = false;
  protected $fillable = array(
    'horse_id',
    'sire_id',
    'dam_id',
    'generation'
    );
  
}
