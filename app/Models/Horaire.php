<?php

namespace App\Models;

use App\Models\Section;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Horaire extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=['debut','fin','section_id'];
    
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
