<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    //
    protected $table = "hobby";
    public $primaryKey = "hobby_id";
     protected $fillable = [
        'hobby', 'user_id'
    ];

}
