<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
session_start();
class HomeController extends Controller
{
    public function index(){
      return view('frontend.pages.home.home');
    }
}
