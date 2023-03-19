<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardpetugas extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1>Hai, '.session()->get('username').'</h1>
		<p>Melayani dengan sepenuh hati</p>
	  </div>';
		return view ('dashboard', $data);
	}
}
