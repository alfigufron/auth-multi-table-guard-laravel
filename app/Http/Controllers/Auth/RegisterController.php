<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Admin;
use App\Teacher;
use App\HomeroomTeacher;
use App\Student;

class RegisterController extends Controller
{
  public function index() {
		return view('Auth.register');
	}

	public function register(Request $request) {
		$hashPassword = Hash::make($request->password);

		if ($request->role == 'A'):
			$data = new Admin;
			$data->identity_number = $request->userid;
		elseif($request->role == 'T'):
			$data = new Teacher;
			$data->nip = $request->userid;
		elseif($request->role == 'HT'):
			$data = new HomeroomTeacher;
			$data->nip = $request->userid;
		else:
			$data = new Student;
			$data->nis = $request->userid;
		endif;

		$data->password = $hashPassword;
		$data->save();

		return redirect()->route('view.register');
	}
}