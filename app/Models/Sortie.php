<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
  
    public function sorties()
    {
        return $this->belongsTo(Product::class);;
    }
}
