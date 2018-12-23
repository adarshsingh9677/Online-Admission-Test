<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected  $guard = 'teachers';
    protected $table='teacher';
}
