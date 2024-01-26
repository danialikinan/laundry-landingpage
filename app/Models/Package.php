<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'time'];

    protected $attributes = [
        'id_service' => 'null',
        'image' => 'null',
        'is_deleted' => 'false'
    ];
}
