<?php

namespace Modules\ProjectReport\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectReport extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\ProjectReport\Database\factories\ProjectReportFactory::new();
    }
}
