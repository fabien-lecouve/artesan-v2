<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Casts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'company_id',
    'estimate_room_id',
    'supply_id',
    'quantity',
    'position',
    'label',
    'unit_cost',
    'unit_price',
    'labor_cost',
    'labor_price',
    'vat_rate_id',
    'description_override',
])]
class EstimateLine extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'unit_cost' => 'decimal:2',
    'unit_price' => 'decimal:2',
    'labor_cost' => 'decimal:2',
    'labor_price' => 'decimal:2',
        ];
    }


    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function estimateRoom(): BelongsTo
    {
        return $this->belongsTo(EstimateRoom::class);
    }

    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supply::class);
    }

    public function vatRate(): BelongsTo
    {
        return $this->belongsTo(VatRate::class);
    }
}