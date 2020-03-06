<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
	protected $table = "tbl_faculty";

   	protected $fillable = ['name', 'email', 'password', 'designation', 'programme', 'semester','phone', 'image'];
}
