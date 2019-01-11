<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'm_schedule';

    protected $fillable = [
        'id',
        'event',
        'date',
        'place',
        'm_status_id',
        'budget',
        'limit',
        'memo',
        'created_at',
        'updated_at',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'm_status_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'updated_by');
    }
    public function proceeding()
    {
        return $this->hadOne(Proceeding::class);
    }
}
