<?php

namespace App\Http\Controllers;

use App\Kerbalnaut;
use App\Mission;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Requests\Request;

class PagesController extends Controller
{
    public function index()
    {
        $kerbals = Kerbalnaut::all();
        return view('pages.index',compact('kerbals'));
    }

    public function show(Kerbalnaut $kerbal)
    {
        return view('pages.show2',compact('kerbal'));
    }

    public function show_mission()
    {
//        Grabbing all the missions for the mission's homepage
        $missions = Mission::all();
        return view('pages.mission',compact('missions'));
    }

    public function add_kerbalnaut(Request $requests) {

        $kerbal = new Kerbalnaut(['last_name'=>$requests->last_name,
            'first_name'=>$requests->first_name,
            'gender'=>$requests->gender,
            'role'=> $requests->role,
            'hire_date'=> $requests->hire_date,
            'mission_status'=> 'Ready for Mission',
            'portrait'=>'http://wiki.kerbalspaceprogram.com/images/e/ee/Happy_kerbal.jpg',
            'is_alive'=>1]);
        $kerbal->save();
        return redirect('team');

    }
}
