<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    // use HasSlug;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
