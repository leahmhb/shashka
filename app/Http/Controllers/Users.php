<?php  
namespace App\Http\Controllers;
use App as App;
use App\Models as Models;
use Auth;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class Users extends Base{

/*
|--------------------------------------------------------------------------
| Table Controls
|--------------------------------------------------------------------------
*/
  public static function user_table_data(){
    $users = App\User::select('id', 'name')->orderBy('name')->get()->toArray();
    return $users;
}//end user_table

/*
|--------------------------------------------------------------------------
| Utility Controls
|--------------------------------------------------------------------------
*/

public static function getCurrentUser(){
  return $user = Auth::user();
}//end getCurrentUser

public static function checkAdmin($user){
  if($user){
    return ($user->admin == 1 ? true : false);
  }
  else {
    return false;
  }
}//end checkAdmin

public static function getUsers(){
  return App\User::select('id', 'name')->get()->toArray();
}//end getUsers

public static function getPerson(){
 $user = Auth::user();

 if(Users::checkAdmin($user)){
   $blank['id'] = '%';
   return $blank;
 }//end if

 if($user){
  $id = $user->id;   

  $person = Models\Person::where('user_id', $id)->first();

  if($person){
    $person = $person->toArray();      
    return $person;
    }//end if 
  }//end if  

  return false;
}//getPerson

public static function checkPermissions($owner_id, $horse_id){
  $user = Auth::user();

  if(Users::checkAdmin($user)){
    /* Bypass further authentication */
    return true;
  }//end if

  if($user){
    $id = $user->id;    

    /* Check if User is an Owner. Field is MANUALLY set. */
    $person = Models\Person::where('user_id', $id)->first();

    if($horse_id != 0){ 
      /* Owner is editing their existing horse. */
      $horse = Models\Horse::select('owner')->where('id', $horse_id)->where('owner', $owner_id)->first();  

      /* Check match between logged in User and Horse's owner */
      if($person['id'] == $horse['owner']){           
        return true;
      }//end if

    } else { 
      /* Owner is adding a new horse. */
      return true;
    }//end if-else

  }//end if

  return false;
}//end checkUser

public static function verifyOwner($horse){ 

  if($horse['id'] == ''){
    /* ID is zero for un-saved, new horses. */
    $horse['id'] == 0;
  }//end if

  $ownerCheck = Users::checkPermissions($horse['owner'], $horse['id']);  

  if(!$ownerCheck){
   /* STOP THEM. */
   return abort(401, 'You do not own this horse.');
  }//end if

}//end verifyOwner

}//end class