<?php

namespace App\Models;

use Database\Factories\TemplateFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['company_id','project_type_id','label'])]
class Template extends Model
{
    use HasFactory;
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function projectType(): BelongsTo
    {
        return $this->belongsTo(ProjectType::class);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(TemplateRoom::class);
    }
}