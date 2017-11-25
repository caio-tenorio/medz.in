<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller {
	public function __construct() {
		$this->middleware(function ($request, $next) {
            return $next($request);
        });
	}

	public function home() {
		$discounts = [];
		$medicamentos[] = (object) [
			'name' => 'Nome do remédio',
			'image_url' => 'https://www.onofre.com.br/estatico/Produto/Super/121029.jpg',
			'from' => 50.3,
			'to' => 47.9,
			'percent' => 30,
			'validate' => '2017-12-01'
		];
		$medicamentos[] = (object) [
			'name' => 'Nome do remédio',
			'image_url' => 'https://www.onofre.com.br/estatico/Produto/Super/121029.jpg',
			'from' => 50.3,
			'to' => 47.9,
			'percent' => 30,
			'validate' => '2017-12-01'
		];
		$medicamentos[] = (object) [
			'name' => 'Nome do remédio',
			'image_url' => 'https://www.onofre.com.br/estatico/Produto/Super/121029.jpg',
			'from' => 50.3,
			'to' => 47.9,
			'percent' => 30,
			'validate' => '2017-12-01'
		];
		
		$data = [];
		$data['medicamentos'] = $medicamentos; 
		
	    return view('home', $data);
	}
}
