<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('template/header');
		echo view('pages/home');
		echo view('pages/footer');
	}

	//--------------------------------------------------------------------

}
