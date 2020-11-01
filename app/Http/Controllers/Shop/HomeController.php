<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
        $this->middleware('role:shop');
  }

  public function index(){
    return view('shop.home');
  }
}
