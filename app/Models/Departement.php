<?php

namespace App\Models;

use App\Models\Section;
use App\Models\Orientation;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model implements HasMedia 
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=['lib','description','section_id'];


    
    public function orientations(): HasMany
    {
        return $this->hasMany(Orientation::class);
    }
    
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

}
