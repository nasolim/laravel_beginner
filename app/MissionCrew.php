<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissionCrew extends Model
{
    public function kerbalnaut()
    {
        return $this->belongsTo(Kerbalnaut::class);
    }

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}
