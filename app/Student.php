<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
  protected $fillable = [
		'nis', 'password'
	];

	protected $hidden = [
		'password'
	];
}