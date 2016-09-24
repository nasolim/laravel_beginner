<?php

namespace App\Http\Controllers;

use App\Kerbalnaut;
use App\Mission;
//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests;

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
}
