<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model{
  public $table = "races";
      protected $fillable = array(
    'name',
      'surface',
      'distance',
      'ran_dt',
      'grade',
      'url'
    );
}
