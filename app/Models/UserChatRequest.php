<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChatRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'requester_user_id',
        'requested_user_id',
        'status',
        'request_date',
    ];
}

