<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Match;
use Illuminate\Http\Request;
use Session;


class ScheduleController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    public function index() {
        $users = User::all();

        return view("admin.schedule.index", ["users", $users]);
    }

    public function edit($id) {
        $schedule = Schedule::Find($id);
        $matches = Match::Where("schedule_id", $id)->get();

        return view("admin.schedule.edit", ["schedule"=> $schedule, "match_list"=>$matches]);
    }

    public function register() {
        return view("admin.schedule.edit");
    }

    public function saveSchedule(Request $request) {
        $this->validate($request, [
           "title" => 'required|max:50',
           "daterange"=> 'required|length:19'
        ]);
        list($start_date, $end_date) = explode(" - ", $request->daterange);
        $sid = $request->sid;
        if ($sid == 0) {
            $item = new Schedule;
            /*Schedule::create(
                array(
                    "title"=>$request->title,
                    "start_date"=>$request->$start_date,
                    "end_date"=>$request->$end_date
                )
            );*/
        } else {
            $item = Schedule::find($sid);
        }

        $item->title = $request->title;
        $item->start_date = $start_date;
        $item->end_date = $end_date;
        $item->save();
        return redirect()->route("admin.schedule.edit");
    }

    public function saveMatch() {

    }

}

