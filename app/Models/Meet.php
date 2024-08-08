<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    use HasFactory;

    protected $table = 'tbl_language';

    protected $fillable = [
        'img',
        'title',
        'status',
    ];
}
