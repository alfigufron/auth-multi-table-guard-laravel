<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginHomeroomTeacherController extends Controller
{
	public function __construct() {
		$this->middleware('guest:homeroom_teacher');
	}

  public function index() {
		return view('Auth.login-homeroom-teacher');
	}

	public function login(Request $request) {
		$loginData = $request->only('nip', 'password');

		$auth = Auth::guard('homeroom_teacher')->attempt($loginData);
		if ($auth) {
			return redirect()->route('view.dashboard');
		}

		return redirect()->route('view.login.homeroom.teacher');
	}
}