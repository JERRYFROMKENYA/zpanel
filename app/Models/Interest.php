<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $table = 'tbl_interest';

    protected $fillable = [
        'img',
        'title',
        'status',
    ];
}
