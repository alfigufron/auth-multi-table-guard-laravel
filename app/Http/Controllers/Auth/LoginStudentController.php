<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginStudentController extends Controller
{
	public function __construct() {
		$this->middleware('guest:student');
	}

  public function index() {
		return view('Auth.login-student');
	}

	public function login(Request $request) {
		$loginData = $request->only('nis', 'password');

		$auth = Auth::guard('student')->attempt($loginData);
		if ($auth) {
			return redirect()->route('view.dashboard');
		}

		return redirect()->route('view.login.student');
	}
}