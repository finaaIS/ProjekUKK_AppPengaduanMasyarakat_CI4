<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardmasyarakat extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1>Hai, '.session()->get('username').'</h1>
		<p>Selamat Datang di Aplikasi Pengaduan Masyarakat Desa Jalaksana, kami siap melayani anda :) !</p>
	  </div>';
		return view ('Masyarakat/Dashboard', $data);
	}
}
