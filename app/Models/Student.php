<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at'];

    ###################################################### START RELATIONS ############################################################
    public function courses(){
        return $this->belongsToMany('App\Models\Course','course-students','student_id','course_id','id','id');
    }

    public function sessions(){
        return $this->belongsToMany('App\Models\Session','student-sessions','student_id','session_id','id','id');
    }

    public function tests(){
        return $this->belongsToMany('App\Models\Test','student-tests','student_id','test_id','id','id');
    }

    public function assignments(){
        return $this->belongsToMany('App\Models\Assignment','student-tests','student_id','assignment_id','id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
