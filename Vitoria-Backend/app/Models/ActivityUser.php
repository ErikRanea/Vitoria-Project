<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'activity_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activityCentro()
    {
        return $this->belongsTo(ActivityCentro::class, 'activity_id');
    }
}
