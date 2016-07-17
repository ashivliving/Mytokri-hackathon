<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class homeController extends Controller
{
	public function index()
	{
		$client = new Client();
		$res = $client->request('GET', 'http://192.168.1.44:8080/api/home-deals/');
		if ($res->getStatusCode() == 200) {
			$result = json_decode($res->getBody());
			return view('welcome')->with('result', $result);
		}
		return "404 Error!";
	}

	public function search(Request $data)
	{
		$search_query = $data->q;
		$page = $data->page;
		$client = new Client();
		$res = $client->request('GET', 'http://192.168.1.44:8080/api/price_comp/', [
			'query' => ['q' => $search_query, 'page' => $page]
		]);
		if ($res->getStatusCode() == 200) {
			$result = json_decode($res->getBody());
			return view('search', compact('result','page','search_query'));
		} else {
			return "404 Error!";
		}
	}
}
