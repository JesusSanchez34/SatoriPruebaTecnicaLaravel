<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    protected $fillable = ['name', 'type', 'image_url'];
}

