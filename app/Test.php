<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";
    protected $fillable = ['name','marks','starTime','endTime','description','locked','attachments','module_id'];
    protected $hidden = ['created_at','updated_at'];

    ###################################################### START RELATIONS ############################################################
    public function module(){
        return $this->belongsTo('App\Module','module_id','id');
    }

    public function students(){
        return $this->belongsToMany('App\Student','student-tests','test_id','student_id','id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
