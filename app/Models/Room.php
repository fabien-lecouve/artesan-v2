<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'code',
    'label',
])]
class Room extends Model
{
    public function estimateRooms(): HasMany
    {
        return $this->hasMany(EstimateRoom::class);
    }

    public function templateRooms(): HasMany
    {
        return $this->hasMany(TemplateRoom::class);
    }
}