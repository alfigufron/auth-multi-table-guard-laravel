<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
	public function __construct() {
		$this->middleware('guest:admin');
	}

  public function index() {
		return view('Auth.login-admin');
	}

	public function login(Request $request) {
		$loginData = $request->only('identity_number', 'password');

		$auth = Auth::guard('admin')->attempt($loginData);
		if ($auth) {
			return redirect()->route('view.dashboard');
		}

		return redirect()->route('view.login.admin');
	}
}