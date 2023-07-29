<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class SubService extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
		'title_ar',
		'title_en',
		'image',
        'description_ar',
        'description_en',
        'file',
        'active',

	];
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
