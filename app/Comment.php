<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table="comments";
    //////////////
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable =['NumberComment','TypeData','NumberFile','Comment'];
}