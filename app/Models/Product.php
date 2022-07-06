<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'libelle',
        'stock',
        'category'
    ];
    public static $rules=array('categories_id'=>'required|integer',
                                'libelle'=>'required|min:20',
                               'stock'=>'required|integer');
  
    public function products()
    {
        return $this->belongsTo(Category::class,
                                Sortie::class,
                                Entree::class);
    }
}
