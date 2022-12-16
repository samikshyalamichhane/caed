<?php

namespace Modules\PressRelease\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PressRelease extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\PressRelease\Database\factories\PressReleaseFactory::new();
    }
}
