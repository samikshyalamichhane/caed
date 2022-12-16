<?php

namespace Modules\FundingPartner\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FundingPartner extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\FundingPartner\Database\factories\FundingPartnerFactory::new();
    }
}
