<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['supply_id','project_type_id','vat_rate_id','unit_price','labor_cost','labor_price'])]
class PriceRule extends Model
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
            'unit_price' => 'decimal:2',
            'labor_cost' => 'decimal:2',
            'labor_price' => 'decimal:2',
        ];
    }


    /**
     * Get the supply that owns the price rule.
     */
    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supply::class);
    }

    /**
     * Get the project type that owns the price rule.
     */
    public function projectType(): BelongsTo
    {
        return $this->belongsTo(ProjectType::class);
    }

    /**
     * Get the vat rate that owns the price rule.
     */
    public function vatRate(): BelongsTo
    {
        return $this->belongsTo(VatRate::class);
    }
}
