<?php

namespace App\Controllers;

class Manager extends BaseController
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		return view('manager/index', $data);
	}

	public function myProfile()
	{
		$data['title'] = 'My Profile';
		return view('user/myProfile', $data);
	}
}
