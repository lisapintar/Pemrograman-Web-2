<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'production_date',
        'expired_date',
        'category',
        'description'
    ];

    protected $dates = [
        'production_date',
        'expired_date',
    ];

    public function isExpired()
{
    return $this->expired_date < now();
}

public function isNearExpired()
{
    return Carbon::parse($this->expired_date)->diffInDays(now()) <= 3
        && ! $this->isExpired();
}

   
}
