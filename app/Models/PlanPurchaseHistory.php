<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanPurchaseHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'plan_id',
        'p_name',
        't_date',
        'amount',
        'day',
        'plan_title',
        'plan_description',
        'expire_date',
        'start_date',
        'trans_id',
        'p_method_id',
    ];
}

