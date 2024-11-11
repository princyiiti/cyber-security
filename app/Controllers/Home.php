<?php

namespace App\Controllers;
use App\Models\Adminmod;
class Home extends BaseController
{
	public function index()
	{
		$Adminmod = new Adminmod(); 

		$page_data['title']="Cyber Security | IIT Indore";

		return view('home',$page_data);
	}
}
