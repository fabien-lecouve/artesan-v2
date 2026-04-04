<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'code',
    'label',
])]
class EstimateStatus extends Model
{
    public function estimates(): HasMany
    {
        return $this->hasMany(Estimate::class);
    }
}