<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    public function kerbalnaut()
    {
        return $this->belongsTo(Kerbalnaut::class);
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
