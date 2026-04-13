<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['code','label'])]
class Unit extends Model
{
    public function supplies(): HasMany
    {
        return $this->hasMany(Supply::class);
    }
}
