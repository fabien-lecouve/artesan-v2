<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name'])]
class Category extends Model
{
    use SoftDeletes;
    
    /**
     * Get the supplies for the category.
     */
    public function supplies(): HasMany
    {
        return $this->hasMany(Supply::class);
    }
}
