<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table = 'car';

    protected $fillable = ['Brand','Model','color','VIN'];
}
