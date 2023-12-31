<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name_ar',
        'name_en',
        'type',
        'position',
        'is_required',
        'is_unique',
        'validation',
    ];

    /**
     * Get the options.
     */

    public function options()
    {
        return $this->hasMany(AttributeOption::class);
    }


    public function attributeFamily()
    {
        return $this->belongsTo(AttributeFamily::class);
    }
}
