<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'total', 'amount', 'status'
    ];
}
