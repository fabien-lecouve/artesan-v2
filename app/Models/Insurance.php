<?php

namespace App\Models;

use Database\Factories\InsuranceFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['name','address','postal_code','city'])]
class Insurance extends Model
{
    use HasFactory;

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }
}