<?php

namespace App\Controllers;

class Admin  extends BaseController
{
	public function index()
	{
		$data['title'] = 'hello Admin';
		return view('admin/dashboard',$data);
	}
}
