<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Race extends Model{
  public $table = "races";
  public $timestamps = false;

  protected $fillable = array(
    'name',
    'surface',
    'distance',
    'ran_dt',
    'grade',
    'url'
    );

  public function getRanDtAttribute($date){ 
   return Carbon::parse($date);
 }



}
