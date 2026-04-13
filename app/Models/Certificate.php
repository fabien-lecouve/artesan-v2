<?php

namespace App\Models;

use Database\Factories\CertificateFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['code','label','logo_path'])]
class Certificate extends Model
{
    use HasFactory;
    
    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }
}