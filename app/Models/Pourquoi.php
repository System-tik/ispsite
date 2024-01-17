<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pourquoi extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=['titre','description'];
}
