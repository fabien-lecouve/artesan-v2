<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable([
    'code',
    'label',
])]
class Room extends Model
{
    use SoftDeletes;
    
    public function estimateRooms(): HasMany
    {
        return $this->hasMany(EstimateRoom::class);
    }

    public function templateRooms(): HasMany
    {
        return $this->hasMany(TemplateRoom::class);
    }
}