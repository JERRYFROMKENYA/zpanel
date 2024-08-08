<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'tbl_setting';

    protected $fillable = [
        'webname',
        'weblogo',
        'timezone',
        'currency',
        'one_key',
        'one_hash',
        'show_dark',
    ];
}
