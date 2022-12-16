<?php

namespace Modules\Contactus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contactus extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
