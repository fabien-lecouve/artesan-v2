<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['code','label'])]
class PaymentMethod extends Model
{
    use SoftDeletes;
    
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
