<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'name',
    'address',
    'postal_code',
    'city',
])]
class Insurance extends Model
{
    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }
}