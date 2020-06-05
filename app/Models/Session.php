<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = "sessions";
    protected $fillable = ['name','starTime','endTime','description','location','locked','attachments','module_id','teatcher_id'];
    protected $hidden = ['created_at','updated_at'];

    ###################################################### START RELATIONS ############################################################
    public function module(){
        return $this->belongsTo('App\Models\Module','module_id','id');
    }

    public function teacher(){
        return $this->belongsTo('App\Models\Teatcher','teatcher_id','id');
    }

    public function sessions(){
        return $this->belongsToMany('App\Models\Student','student-sessions','session_id','student_id','id','id');
    }
    ###################################################### END RELATIONS ############################################################
}
