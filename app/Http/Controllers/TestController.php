<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller {
	public function login() {
		$data = ['name'=>'wuyutao', 'age'=>18];
		return view('test', $data);
	}
}