<?php

namespace Modules\DevelopmentProject\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectPartner extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function scopePublished($query)
    {
        return $query->where('publish', 1);
    }

    public function project(){
        return $this->belongsTo('Modules\DevelopmentProject\Entities\Project','project_id');
    }
    
}
