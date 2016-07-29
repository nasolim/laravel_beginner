<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissionCrew extends Model
{
    protected $fillable = ['kerbalnaut_id','mission_id'];
    public function kerbalnaut()
    {
        return $this->belongsTo(Kerbalnaut::class);
    }

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}
