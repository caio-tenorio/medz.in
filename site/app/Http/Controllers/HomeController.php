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
		$medicamentos = \App\Models\Medicamentos::get();
		
		$data = [
			'medicamentos' => $medicamentos
		];
		
	    return view('home', $data);
	}
}
