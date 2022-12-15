<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'store_id',
        'street',
        'city',
        'state',
        'zipcode',
    ];

    public function store() : HasOne
    {
        return $this->hasOne(Store::class);
    }
}