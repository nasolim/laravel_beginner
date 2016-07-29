<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerbalnaut extends Model
{
// a kerbalnaut belongs to many missions. A kerbalnaut belongs to many missioncrew.
// many mission crews belong to mission
    protected $fillable = ['last_name','first_name','gender','role','hire_date','mission_status','is_alive','portrait'];

    public function missions()
    {
        return $this->belongsToMany(Mission::class,'mission_crews');

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
