<?php

namespace Modules\SuccessStory\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuccessStory extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\SuccessStory\Database\factories\SuccessStoryFactory::new();
    }
}
