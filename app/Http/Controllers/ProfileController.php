<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
  public function index()
  {
    //Get profile from db
    return view('show');
  }
  public function update()
  {
    return "profile Updated";
  }
}
