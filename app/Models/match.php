<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    protected $table = "match";
    protected $fillable = array("teama_id", "teamb_id", "result", "win", "schedule_id");
    public $timestamps = false;
}
