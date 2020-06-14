<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pesananID', 'userID', 'menuID', 'mejaID', 'jumlah',
    ];

    public function menu()
    {
    	return $this->hasMany('App\Menu');
    }

    public function meja()
    {
    	return $this->hasMany('App\Meja');
    }
}
