<?php

namespace Modules\Publication\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublicationCategory extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Publication\Database\factories\PublicationCategoryFactory::new();
    }
    public function publicationSubCategory(){
        return $this->hasMany('Modules\Publication\Entities\PublicationSubCategory','publicationCategory_id');
    }
}
