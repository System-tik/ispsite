<?php

namespace App\Models;

use App\Models\Departement;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orientation extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=['lib','description','departement_id'];

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }
}
