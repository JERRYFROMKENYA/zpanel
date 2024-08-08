<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'tbl_plan';

    protected $fillable = [
        'title',
        'amt',
        'description',
        'filter_include',
        'day_limit',
        'direct_chat',
        'Like_menu',
        'audio_video',
        'status',
        'chat',
    ];
}
