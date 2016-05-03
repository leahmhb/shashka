<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race_Record extends Model{
  public $table = "race_records";
  public $timestamps = false;

    protected $fillable = array(
    'horse_id',
    'race_id',
    'time'
    );
}
