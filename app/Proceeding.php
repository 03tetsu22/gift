<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceeding extends Model
{
    protected $table = 'm_proceeding';

    protected $fillable = [
        'id',
        'm_schedule_id',
        'date',
        'create_by',
        'proceeding',
        'created_at',
        'updated_at',
        'updated_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'updated_by');
    }
    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}
