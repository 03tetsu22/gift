<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'm_status';

    protected $fillable = [
        'id',
        'status',
        'table',
    ];

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function draft()
    {
        return $this->belongsTo(Draft::class);
    }
}
