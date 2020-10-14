<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginTeacherController extends Controller
{
	public function __construct() {
		$this->middleware('guest:teacher');
	}
	
  public function index() {
		return view('Auth.login-teacher');
	}

	public function login(Request $request) {
		$loginData = $request->only('nip', 'password');

		$auth = Auth::guard('teacher')->attempt($loginData);
		if ($auth) {
			return redirect()->route('view.dashboard');
		}

		return redirect()->route('view.login.teacher');
	}
}