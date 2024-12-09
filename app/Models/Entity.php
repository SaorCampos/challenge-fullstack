<?php

namespace App\Models;

use App\Core\Traits\AutoMapper;
use Illuminate\Database\Eloquent\Model;
use App\Core\ApplicationModels\IObjAutoMapper;
use App\Core\ApplicationModels\IArraySerializer;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entity extends Model implements IObjAutoMapper, IArraySerializer
{
    use HasFactory, AutoMapper;

    public const DELETED_AT = null;
    public const CREATED_AT = null;
    public const UPDATED_AT = null;
}
