<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model{
  public $table = "horses";
  protected $fillable = array(
    'call_name',
    'registered_name',
    'sex',
    'color',
    'phenotype',
    'grade',
    'owner',
    'breeder',
    'hexer',
    'pos_ability_1',
    'pos_ability_2',
    'neg_ability_1',
    'distance_min',
    'distance_max',
    'surface_dirt',
    'surface_turf',
    'speed',
    'staying',
    'stamina',
    'breaking',
    'power',
    'feel',
    'fierce',
    'tenacity',
    'courage',
    'response',
    'leg_type',
    'neck_height',
    'run_style',
    'bandages',
    'hood',
    'shadow_roll'
    );

}//end Horse
