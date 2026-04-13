<?php

namespace App\Models;

use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['company_id','email','firstname','lastname','address','complementary_address','postal_code','city','phone'])]
class Customer extends Model
{
    use HasFactory;
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}