<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EVA extends Model
{
    protected $table = 'evas';
    
    public function kerbalnaut()
    {
        return $this->belongsTo(Kerbalnaut::class);
    }
    
}
