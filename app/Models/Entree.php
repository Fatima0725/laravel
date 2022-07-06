<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'product',
        'quatity',
        'price',
        'date'
    ];
    public static $rules=array('products_id'=>'required|integer',
                                'quantity'=>'required|integer',
                               'price'=>'required|integer',
                               'date'=>'required|min:3');
  
    public function entrees()
    {
        return $this->belongsTo(Product::class);;
    }
}
