<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeFamily extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name_ar',
        'name_en',
        'status'
    ];



    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }
}
