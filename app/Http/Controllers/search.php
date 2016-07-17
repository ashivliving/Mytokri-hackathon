<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class search extends Controller
{
    public function index(Request $data){
    	return $data->s;
    }
}
