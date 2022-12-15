<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
//        'location_id'
    ];

    protected $casts = [
        'id' => 'int',
//        'location_id' => 'int'
    ];

//    public function location() : BelongsTo
//    {
//        return $this->belongsTo(Location::class);
//    }
}
