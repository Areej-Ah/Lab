<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name_ar',
        'name_en',
        'code',
        'attribute_id',
    ];


    /**
     * Get the attribute that owns the attribute option.
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
