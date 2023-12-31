<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table    = 'photos';
    protected $fillable = [
        'title_ar',
        'title_en',
        'image',
        'active',
    ];
}
