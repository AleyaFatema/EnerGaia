<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','product_code', 'quantity','price','vendor','supplier','description',
    ];

    public function suppliers()
    {
//        return $this->belongsTo(User::class);
        return $this->belongsTo(User::class,'supplier','id');
    }
}
