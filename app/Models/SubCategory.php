<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = [
        'title',
        'category_name',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
