<?php

namespace Modules\ProcurementNotice\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProcurementNotice extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\ProcurementNotice\Database\factories\ProcurementNoticeFactory::new();
    }
}
