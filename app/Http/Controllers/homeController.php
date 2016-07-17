<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;
 
class homeController extends Controller
{
    public function index(){
    	$client = new Client();
	 $res = $client->request('GET', 'http://192.168.1.44:8080/api/home-deals/');
	 if($res->getStatusCode()==200)
	 {
	 	$result = json_decode($res->getBody());
	 	return view('welcome')->with('result',$result);
	 }
	  return "404 Error!";
    }

    public function search(Request $data){
    	$name = $data->s;
    	$client = new Client();
    	$res = $client->request('GET', 'http://192.168.1.44:8080/api/buy-hatke/',[
    		'query' => ['q' => $name,'page' => 1]
    		]);
	 if($res->getStatusCode()==200)
	 {
	 	$result = json_decode($res->getBody());
	 	dd($result);
	 	//return view('welcome')->with('result',$result);
	 }
	 else{
	  return "404 Error!";
    }
	}
}
