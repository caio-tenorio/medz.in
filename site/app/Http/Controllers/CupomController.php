<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class CupomController extends Controller {
	public function __construct() {
		$this->middleware(function ($request, $next) {
            return $next($request);
        });
	}

	public function make() {
		$snappy = \App::make('snappy.pdf');
		
		$path_url = 'cupons/'.sha1(time()).'.pdf';
		
		$snappy->generate('http://mediz.in/pdf/view', public_path($path_url));
		
		$url = url($path_url);
		
		echo '<a href="'.$url.'" target="_blank">Download <small>('.$path_url.')</small><a/>';
	}
	
	public function view(){
		return view('cupom');
	}
}
