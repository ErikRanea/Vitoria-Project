<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function CentroCivicos(){
        return $this->belongsTo(CentroCivico::class);
    }
}
