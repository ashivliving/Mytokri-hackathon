<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class couponController extends Controller
{
    public function index(Request $data){
    	$store = $data->store;
    	$search_query = $data->q;
    	$link = $data->link;
    	$img_link = $data->img_link;
    	$client = new Client();
    	$res = $client->request('GET', 'http://192.168.1.44:8080/api/coupons/',[
    		'query' => ['store' => $store,'q' => $search_query]
    		]);
	 if($res->getStatusCode()==200)
	 {
	 	$result = json_decode($res->getBody());
	 	//dd($result);
	 	$title = 'Coupon';
	 	return view('coupon', compact('title','search_query','link', 'result', 'img_link', 'store'));
	 }
	 else{
	  return "404 Error!";
    }
    }
}
