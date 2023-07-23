<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table    = 'services';
	protected $fillable = [
		'name_ar',
		'name_en',
		'icon',
        'description_ar',
        'description_en'

	];
}
