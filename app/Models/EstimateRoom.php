<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Casts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'company_id',
    'estimate_id',
    'room_id',
    'complementary_label',
    'position',
    'warranty',
    'supplies',
    'labor',
    'subtotal',
])]
class EstimateRoom extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'supplies' => 'decimal:2',
            'labor' => 'decimal:2',
            'subtotal' => 'decimal:2'
        ];
    }


    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function estimate(): BelongsTo
    {
        return $this->belongsTo(Estimate::class);
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function lines(): HasMany
    {
        return $this->hasMany(EstimateLine::class);
    }
}