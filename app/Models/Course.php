<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $fillable = ['name','type'];
    protected $hidden = ['created_at','updated_at','pivot'];

    ###################################################### START RELATIONS ############################################################
    public function modules(){
        return $this->hasMany('App\Models\Module','course_id','id');
    }

    public function teachers(){
        return $this->belongsToMany('App\Models\Teatcher','teacher-courses','course_id','teacher_id','id','id');
    }

    public function students(){
        return $this->belongsToMany('App\Models\Student','course-students','course_id','student_id','id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
