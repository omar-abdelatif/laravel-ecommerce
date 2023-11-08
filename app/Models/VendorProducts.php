<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorProducts extends Model
{
    use HasFactory;

    protected $table = 'vendor_products';
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'status',
        'reviews',
        'vendor_id'
    ];
    public function asdasd(){}
    public function asdasda(){}
}
