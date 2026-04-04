<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable([
    'code',
    'label',
    'logo_path',
])]
class Certificate extends Model
{
    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }
}