<?php

namespace App\Http\Controllers;

use App\Kerbalnaut;
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

    public function show(Kerbalnaut $kerbal_id)
    {
        return view('pages.show',compact('kerbal_id'));
    }
}
