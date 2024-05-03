<?php

namespace App\Models;


use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'img',
        'category_id',
    ];
    // nome della function
    public function category (){
        return $this->belongsTo(Category::class);
    }
}
