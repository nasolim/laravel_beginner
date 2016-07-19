<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    public function kerbalnaut()
    {
        return $this->belongsTo(Kerbalnaut::class);
    }
}
