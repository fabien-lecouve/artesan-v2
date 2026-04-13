<?php

namespace App\Models;

use Database\Factories\templateLineFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['company_id','template_room_id','supply_id','quantity','position','label','description_override'])]
class TemplateLine extends Model
{
    use HasFactory;
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function templateRoom(): BelongsTo
    {
        return $this->belongsTo(TemplateRoom::class);
    }

    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supply::class);
    }
}