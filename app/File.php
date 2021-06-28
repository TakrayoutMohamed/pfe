<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $table="files";
    //////////////
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable =['NumberFile','Semester_data','File','Title','Description','Statement','Subject','Typedata','Felieredata'];
}
