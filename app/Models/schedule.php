<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $table = "schedule";
    protected $fillable = array("title", "start_date", "end_date");
    public $timestamps = false;
}
