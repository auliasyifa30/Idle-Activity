<?php

namespace App\Controllers;

class Hr extends BaseController
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		return view('hr/index', $data);
	}

	public function myProfile()
	{
		$data['title'] = 'My Profile';
		return view('user/myProfile', $data);
	}

	public function approved()
	{
		$data['title'] = 'Approved Activity Idle';
		return view('hr/approved', $data);
	}
}
