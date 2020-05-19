<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'harga', 'promo', 'resep', 'rating',
    ];

    public function resep()
    {
    	return $this->hasMany('App\Bahan');
    }

    public function pesanan(){
    	return $this->belongsTo('App\Pesanan');
    }
}
