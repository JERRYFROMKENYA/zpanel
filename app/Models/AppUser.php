<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;

    protected $table = 'tbl_app_user';

    protected $fillable = [
        'name',
        'mobile',
        'password',
        'rdate',
        'status',
        'ccode',
        'code',
        'refercode',
        'wallet',
        'email',
        'gender',
        'lats',
        'longs',
        'profile_bio',
        'profile_pic',
        'birth_date',
        'search_preference',
        'radius_search',
        'relation_goal',
        'interest',
        'language',
        'religion',
        'other_pic',
        'plan_id',
        'plan_start_date',
        'plan_end_date',
        'is_subscribe',
        'history_id',
        'height',
        'identity_picture',
        'is_verify',
        'direct_audio',
        'direct_video',
        'direct_chat',
    ];
}
