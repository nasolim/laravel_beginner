<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerbalnaut extends Model
{
// a kerbalnaut belongs to many missions. A kerbalnaut belongs to many missioncrew.
// many mission crews belong to mission
    public function missioncrew()
    {
        return $this->hasManyThrough(Mission::class,MissionCrew::class,'kerbalnaut_id','id');
        
    }
// evas will have the same DB connections as missioncrews. 
    public function evas()
    {
        return $this->hasMany(EVA::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

}
