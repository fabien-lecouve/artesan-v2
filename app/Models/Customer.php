<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'company_id',
    'mail',
    'firstname',
    'lastname',
    'address',
    'complementary_address',
    'postal_code',
    'city',
    'phone',
])]
class Customer extends Model
{
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}