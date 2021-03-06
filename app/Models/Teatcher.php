<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teatcher extends Model
{
    protected $table = "teatchers";
    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at','pivot'];

    ###################################################### START RELATIONS ############################################################
    public function sessions(){
        return $this->hasMany('App\Models\Session','teatcher_id','id');
    }
    
    public function courses(){
        return $this->belongsToMany('App\Models\Course','teacher-courses','teacher_id','course_id','id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
