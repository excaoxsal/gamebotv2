<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PcgamesController extends Controller
{
     public function index(){
    	return View('pc');
    }
}
