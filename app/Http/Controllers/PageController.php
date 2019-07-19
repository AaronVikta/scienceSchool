<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PageController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth')->except(['AdministrationPage','Extra','External','FAQ',
    'Results','Skills','Terms']);
    }
    public function AdministrationPage(){
      return view('administration');
    }
    public function Admission(){
      return view('admission');
    }
    public function External(){
      return view('external');
    }
    public function Extra(){
      return view('extra');
    }
    public function FAQ(){
      return view('faq');
    }
    public function Results(){
      return view('results');
    }
    public function Skills(){
      return view('skills');
    }
    public function Terms(){
      return view('terms');
    }
}
