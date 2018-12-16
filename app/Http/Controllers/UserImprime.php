<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserImprime extends Controller
{
	public function usuario() {
  	return view('usuario');
	}
}
