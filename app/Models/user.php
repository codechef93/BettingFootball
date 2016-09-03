<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "user";
    protected $fillable = array("firstname", "lastname", "email", "password");
    public $timestamps = false;

}
