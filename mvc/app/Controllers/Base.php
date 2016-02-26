<?php
 
namespace App\Http\Controllers;
 
use App\Base;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class Base extends Controller{
	public function index(){
return view('child', ['title' => "Index");
	}//end index

}//end class