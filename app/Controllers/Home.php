<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index($nama = '')
	{
		echo "Ini about dari home $nama.";
	}

	//--------------------------------------------------------------------

}
