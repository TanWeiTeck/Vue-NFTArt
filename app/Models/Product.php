<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $fillable = [
        'id',
        'category_id',
        'name',
        'description',
        'price',
        'image',
    ];
    use HasFactory;

    public function category(){
        return $this->hasOne( related: 'App\Models\Category', foreignKey:'category_id', localKey:'category_id');
    }
}

