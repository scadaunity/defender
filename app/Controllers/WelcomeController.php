<?php

namespace App\Controllers;

/**
 *
 */
class WelcomeController
{

  function __construct()
  {
    // code...
  }

  public function index($params){
      $data =[

      ];
      return view('welcome',$data,'navbar');
  }
}
