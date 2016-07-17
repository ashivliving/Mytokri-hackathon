<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class couponController extends Controller
{
    public function index(Request $data){
    	$store = $data->store;
    	$q = $data->q;
    	$client = new Client();
    	$res = $client->request('GET', 'http://192.168.1.44:8080/api/coupons/',[
    		'query' => ['store' => $store,'q' => $q]
    		]);
	 if($res->getStatusCode()==200)
	 {
	 	$result = json_decode($res->getBody());
	 	//dd($result);
	 	$title = 'Coupon';
	 	return view('coupon')->with('result',$result)->with('title',$title);
	 }
	 else{
	  return "404 Error!";
    }
    }
}
