<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = "team";
    protected $fillable = array("teamname", "icon");
    public $timestamps = false;
}
