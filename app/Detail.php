<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public $table="details";
    //////////////
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable =['Biography','Position','Facebook','Youtube','Twitter','Siteweb','Bg_image','Profil_image','SubjectData'];
}
