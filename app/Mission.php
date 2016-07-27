<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{

    protected $fillable = ['name','origin','target','launch_date','return_date','flight_hrs','flight_mins','status'];

    public function kerbalnaut()
    {
        return $this->belongsToMany(Kerbalnaut::class,'mission_crews');
    }

    public function crews()
    {
        return $this->hasMany(MissionCrew::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
}






