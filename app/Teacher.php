<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
  protected $fillable = [
		'nip', 'password'
	];

	protected $hidden = [
		'password'
	];
}