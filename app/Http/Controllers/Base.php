<?php
namespace App\Http\Controllers;
use App\Models as Models;

use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Base extends Controller{

  public function __construct(){
    View::composers(['App\Composers\HomeComposer'  => 
      [
      'layout.*', 
      'includes.*', 
      'forms.*',      
      'pages.*',
      'guides.*',  
      'tables.*',
      'errors.*'
      ]]);

  }//end construct

/*
|--------------------------------------------------------------------------
| Table Controls
|--------------------------------------------------------------------------
*/
public function people_tables(){
  $person = Person::person_table_data();
  $users = Users::user_table_data();
  return View('tables.people', ['person' => $person, 'users' => $users]);
  }//end people_tables
/*
|--------------------------------------------------------------------------
| Domain Controls
|--------------------------------------------------------------------------
*/
public function getHorseDomain(){
  $domain = [];

  $domain['grades'] = Models\Domain_Value::where('domain', 'GRADE')->whereNotIn('value', ['All'])->get();
  $domain['breeding_status'] = Models\Domain_Value::where('domain', 'BREEDING_STATUS')->get();
  $domain['leg_types'] = Models\Domain_Value::where('domain', 'LEG_TYPE')->orderBy('id')->get();
  $domain['sexes'] = Models\Domain_Value::where('domain', 'SEX')->get();    
  $domain['surface_pref'] = Models\Domain_Value::where('domain', 'SURFACE_PREF')->get();    
  $domain['bandages'] = Models\Domain_Value::where('domain', 'BANDAGES')->orderBy('id')->get();    
  $domain['shadow_roll'] = Models\Domain_Value::where('domain', 'SHADOW_ROLL')->orderBy('id')->get(); 
  $domain['neck_height'] = Models\Domain_Value::where('domain', 'NECK_HEIGHT')->get();
  $domain['run_style'] = Models\Domain_Value::where('domain', 'RUN_STYLE')->get();
  $domain['hood'] = Models\Domain_Value::where('domain', 'HOOD')->orderBy('id')->get();    
  $domain['person'] = Models\Person::orderBy('username', 'asc')->get();

  $domain['pos_abilities'] = Models\Ability::where('type', 'positive')
  ->orderBy('ability', 'asc')
  ->get();

  $domain['neg_abilities'] = Models\Ability::where('type', 'negative')
  ->orderBy('ability', 'asc')
  ->get(); 

  return $domain;
}//end getHorseDomain

public function getRaceDomain($person_id = false){
  $domain = [];

  $races = Models\Race::select('id', 'name', 'grade', 'surface', 'series', 'distance', 'ran_dt')
  ->orderBy('name')
  ->get()->toArray();

  foreach($races as $i=>$r){
    $races[$i]['grade'] = Models\Domain_Value::where('domain', 'GRADE')->where('id', $r['grade'])->first()['grade'];
    $races[$i]['surface'] = Models\Domain_Value::where('domain', 'SURFACE')->where('id', $r['surface'])->first()['surface'];
    $races[$i]['series'] = Models\Domain_Value::where('domain', 'RACE_SERIES')->where('id', $r['series'])->first()['series'];   

    $ran_dt = $races[$i]['ran_dt'];

    if(date('Y-m-d', strtotime($r['ran_dt'])) == '1000-01-01') {
      $races[$i]['ran_dt'] = 'TBA';
    }elseif(date('Y-m-d', strtotime($r['ran_dt'])) == '1111-11-11'){
      $races[$i]['ran_dt'] = 'Unknown';
    }else {
      $races[$i]['ran_dt'] = date('Y-m-d', strtotime($r['ran_dt']));
    }

  }

  $horses = Models\Horse::select('id', 'call_name')->orderBy('call_name');

  if($person_id){
    $horses = $horses->where('owner', 'like', $person_id);   
  }

  $domain['race_series'] =  Models\Domain_Value::where('domain', 'RACE_SERIES')->get();
  $domain['grades'] = Models\Domain_Value::where('domain', 'GRADE')->get();
  $domain['surfaces'] = Models\Domain_Value::where('domain', 'SURFACE')->get(); 

  $domain['races'] = $races;
  $domain['my_horses'] = $horses->get()->toArray();    

  return $domain;
  }//end getRaceDomain

  public function getLineageDomain(){
    $domain = [];

    $sires = Models\Horse::select('id', 'call_name')->where('sex', 10)->orderBy('call_name');
    $dams = Models\Horse::select('id', 'call_name')->where('sex', 11)->orderBy('call_name');
    $horses = Models\Horse::select('call_name', 'id')->orderBy('call_name');

    $domain['sires'] = $sires->get()->toArray();
    $domain['dams'] = $dams->get()->toArray();
    $domain['horses'] = $horses->get()->toArray();

    return $domain;
  }//end getLineageDomain
/*
|--------------------------------------------------------------------------
| Page Controls
|--------------------------------------------------------------------------
*/
public function index(){
  return view('pages.index');
  }//end index


  public function credits(){
    return view('pages.credits');
  }//end credits

  public function contact(){
    return view('pages.contact');
  }//end credits
/*
|--------------------------------------------------------------------------
| Guide Controls
|--------------------------------------------------------------------------
*/
public function guide_getting_started(){
  return view('guides.getting_started');
  }//end guide_getting_started

  public function guide_breeding(){
    return view('guides.breeding');
  }//end guide_breeding

  public function guide_colors(){
    return view('guides.colors');
  }//end guide_colors

  public function guide_stats(){
    return view('guides.stats');
  }//end guide_stats

  public function guide_abilities(){
    return view('guides.abilities');
  }//end guide_abilities

  public function guide_form(){
    return view('guides.form',['domain' => Base::getHorseDomain()]);
  }//end guide_form

  public function guide_form_result(){
    $data = Base::trimWhiteSpace($_POST);
    return view('guides.form_result', ['data' => $data]);
  }//end guide_form_result

/*
|--------------------------------------------------------------------------
| Utility Controls
|--------------------------------------------------------------------------
*/
public function trimWhiteSpace($data){
  foreach($data as $i=>$d){
    $data[$i] = trim(htmlspecialchars($d, ENT_QUOTES));
    }//strip whitespace
    return $data;
  }//end trimWhitespace

  public static function output($a){
    echo "<pre>" . print_r($a, true) . "</pre>";
    exit;
  }//end printArray

  public function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
      return $number. 'th';
    else
      return $number. $ends[$number % 10];
  }//end ordinal

}//end class
