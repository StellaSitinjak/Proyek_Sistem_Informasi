<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $table = 'bahan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stok', 'nama',
    ];

    public function menu(){
    	return $this->belongsTo('App\Menu');
    }
}
