<?php

namespace Modules\Publication\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Publication\Database\factories\PublicationFactory::new();
    }
    public function publicationSubCategory(){
        return $this->belongsTo('Modules\Publication\Entities\PublicationSubCategory','publicationSubCategory_id');
    }
}
