<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		return view('user/index', $data);
	}

	public function myProfile()
	{
		$data['title'] = 'My Profile';
		return view('user/myProfile', $data);
	}

	public function changePassword() {
		$data['title'] = 'Change Password';
		return view('user/changePassword', $data);
	}

	public function submit() {
		$data['title'] = 'Submit Activity';
		return view('user/submit', $data);
	}
}
