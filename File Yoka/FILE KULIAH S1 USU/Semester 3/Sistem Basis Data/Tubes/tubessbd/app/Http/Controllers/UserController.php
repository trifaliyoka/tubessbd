<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;

class UserController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function home() {
      return view('auth.registerberhasil');
    }


}
