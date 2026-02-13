<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    protected $fillable = [
        'day_name',
        'hours_range',
        'is_closed',
        'sort_order'
    ];
}
