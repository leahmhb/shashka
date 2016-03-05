<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race_Entrant extends Model{
  public $table = "race_entrants";
  protected $fillable = array(
    'race_id',
    'horse_id',
    'placing'
    );
}
