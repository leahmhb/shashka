<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class AboutController extends Controller{
  public function create(ContactFormRequest $request) {
  return Redirect::route('contact')
  ->with('message', 'Thanks for contacting us!');
}

public function store(ContactFormRequest $request){
}


}
