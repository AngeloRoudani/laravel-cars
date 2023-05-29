<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'price',
        'cc',
        'year_release',
        'optional_id'

    ];

    public function optionals(){
        return $this->belongsToMany(Optional::class);
    }
}
