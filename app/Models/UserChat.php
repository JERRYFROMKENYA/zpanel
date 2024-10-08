<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_1_id',
        'user_2_id',
        'message',
        'sent_time',
        'status',
    ];
}

