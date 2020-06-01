<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = "sessions";
    protected $fillable = ['name','starTime','endTime','description','location','locked','attachments','module_id','teatcher_id'];
    protected $hidden = ['created_at','updated_at'];

    ###################################################### START RELATIONS ############################################################
    public function module(){
        return $this->belongsTo('App\Module','module_id','id');
    }

    public function teacher(){
        return $this->belongsTo('App\Teatcher','teatcher_id','id');
    }

    public function sessions(){
        return $this->belongsToMany('App\Student','student-sessions','session_id','student_id','id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
