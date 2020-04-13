<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function home()
	{
		echo "Selamat datang di halaman admin";
	}

	//--------------------------------------------------------------------

}
