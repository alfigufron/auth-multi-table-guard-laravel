<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class HomeroomTeacher extends Authenticatable
{
  protected $fillable = [
		'nip', 'password'
	];

	protected $hidden = [
		'password'
	];
}