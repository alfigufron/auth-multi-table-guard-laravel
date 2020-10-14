<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function index() {
		return view('home');
	}

	public function logout() {
		if (Auth::guard('admin')->check()):
			Auth::guard('admin')->logout();
			return redirect()->route('view.login.admin');

		elseif (Auth::guard('teacher')->check()):
			Auth::guard('teacher')->logout();
			return redirect()->route('view.login.teacher');

		elseif (Auth::guard('homeroom_teacher')->check()):
			Auth::guard('homeroom_teacher')->logout();
			return redirect()->route('view.login.homeroom.teacher');

		else:
			Auth::guard('student')->logout();
			return redirect()->route('view.login.student');
			
		endif;
	}
}