<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['code','label'])]
class EstimateStatus extends Model
{
    use SoftDeletes;
    
    public function estimates(): HasMany
    {
        return $this->hasMany(Estimate::class);
    }
}