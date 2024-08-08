<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $table = 'tbl_action';

    protected $fillable = [
        'uid',
        'profile_id',
        'action',
    ];
}
