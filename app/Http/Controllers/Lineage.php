<?php

namespace App\Http\Controllers;
use App\Models as Models;
use View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Lineage extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	public function __construct(){
		View::composers([
			'App\Composers\HomeComposer'  => ['create_lineage'] 
			]);
    }//end construct

    public function create_lineage(){
    	return view('create_lineage', ['domain' => $this->getDomain()]);
}//end create_lineage

public function create_lineage_validate(){
	echo "<pre>" . print_r($_POST, true) . "</pre>";
	exit;
	return view('create_lineage', ['domain' => $this->getDomain()]);
}//end create_lineage_validate

public function getDomain(){
	$domain['sires'] = Models\Horse::select('id', 'call_name')
	->where('sex', 'Stallion')
	->get()->toArray();

	$domain['dams'] = Models\Horse::select('id', 'call_name')
	->where('sex', 'Mare')
	->get()->toArray();

	$domain['horses'] = Models\Horse::select('id', 'call_name')
	->get()->toArray();

	return $domain;
}//end getDomain

}//end class