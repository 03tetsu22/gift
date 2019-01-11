<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    protected $table = 'm_draft';

    protected $fillable = [
        'id',
        'draft',
        'start_at',
        'publish_at',
        'copy_amount',
        'now_stock',
        'limit_date',
        'm_status_id',
        'charge',
        'cost',
        'created_at',
        'updated_at',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'm_status_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'charge');
    }
}
