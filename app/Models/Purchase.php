<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    public $fillable = [
        'id',
        'name',
        'email',
        'contact',
        'payment_method',
        'cancel_order',
        'refund'

    ];
    use HasFactory;
}
