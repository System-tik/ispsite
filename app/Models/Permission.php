<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as ModelsPermission ;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends ModelsPermission
{
    use HasFactory;
}
