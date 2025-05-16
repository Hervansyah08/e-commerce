<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VarianProduct extends Model
{
    use HasFactory;
    // use HasSlug;

    protected $table = 'varian_products';
    protected $fillable = [
        'product_id',
        'color',
        'storage',
        'price',
        'stock',
        'weight',
    ];

    // tipe data ini akan di konversi ketika kita mengakses data dengan model
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
