<?php

namespace Modules\Publication\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublicationSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Publication\Database\factories\PublicationSubCategoryFactory::new();
    }
    public function publicationCategory(){
        return $this->belongsTo('Modules\Publication\Entities\PublicationCategory','publicationCategory_id');
    }
    public function publication(){
        return $this->hasMany('Modules\Publication\Entities\Publication','publicationSubCategory_id');
    }
}
