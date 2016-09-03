<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Betting extends Model
{
    //
    protected $table = "betting";
    protected $fillable = array("user_id", "match_id", "win", "result");
    public $timestamps = false;

}
