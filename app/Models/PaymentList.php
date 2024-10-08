<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentList extends Model
{
    use HasFactory;

    protected $table = 'tbl_payment_list';

    protected $fillable = [
        'title',
        'img',
        'attributes',
        'status',
        'subtitle',
        'p_show',
    ];
}
