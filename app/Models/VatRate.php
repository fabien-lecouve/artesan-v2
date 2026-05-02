<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['code','label','rate'])]
class VatRate extends Model
{
    use SoftDeletes;
    
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'rate' => 'decimal:2',
        ];
    }


    /**
     * Get the price rules for the vat rate.
     */
    public function priceRules(): HasMany
    {
        return $this->hasMany(PriceRule::class);
    }
}
