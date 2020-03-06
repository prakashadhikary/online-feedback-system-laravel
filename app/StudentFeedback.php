<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentFeedback extends Model
{
	protected $table = "tbl_student_feedback";
	
	protected $fillable = ['student_id', 'faculty_id', 'answer_id', 'rating', 'shortDescription'];

    public function faculty()
    {
        return $this->hasOne('App\Faculty', 'id', 'faculty_id');
    }

    public function feedback()
    {
        return $this->hasOne('App\Feedback', 'id', 'answer_id');
    }

}
