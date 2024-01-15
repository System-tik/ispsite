<?php

namespace App\Models;

use App\Models\Horaire;
use App\Models\Departement;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=['lib'];

    public function departements(): HasMany
    {
        return $this->hasMany(Departement::class);
    }
    public function horaires(): HasMany
    {
        return $this->hasMany(Horaire::class);
    }
}
