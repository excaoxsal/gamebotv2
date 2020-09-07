<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class MobilegamesController extends Controller
{
    public function index(){
    	return View('mobile');
    }
}
