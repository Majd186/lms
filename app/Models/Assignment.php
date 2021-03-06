<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $table = "assignments";
    protected $fillable = ['name','mark','starTime','endTime','description','locked','attachments','module_id'];
    protected $hidden = ['created_at','updated_at'];
    
    ###################################################### START RELATIONS ############################################################
    public function module(){
        return $this->belongsTo('App\Models\Module','module_id','id');
    }

    public function students(){
        return $this->belongsToMany('App\Models\Student','student-tests','assignment_id','student_id','id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
