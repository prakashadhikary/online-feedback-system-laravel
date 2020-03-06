<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "tbl_student";

   	protected $fillable = ['name', 'email', 'password', 'phone', 'programme', 'semester', 'gender', 'dob', 'image', 'status'];
}
