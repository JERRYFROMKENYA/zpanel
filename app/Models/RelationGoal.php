<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationGoal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'status',
    ];
}
