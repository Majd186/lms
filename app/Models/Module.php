<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = "modules";
    protected $fillable = ['name','course_id'];
    protected $hidden = ['created_at','updated_at'];

    ###################################################### START RELATIONS ############################################################
    public function course(){
        return $this->belongsTo('App\Models\Course','course_id','id');
    }

    public function assignments(){
        return $this->hasMany('App\Models\Assignment','module_id','id');
    }

    public function tests(){
        return $this->hasMany('App\Models\Test','module_id','id');
    }

    public function sessions(){
        return $this->hasMany('App\Models\Session','module_id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
