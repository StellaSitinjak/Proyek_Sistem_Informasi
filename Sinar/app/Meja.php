<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $table = 'meja';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kapasitas', 'status',
    ];

    public function pesanan(){
    	return $this->belongsTo('App\Pesanan');
    }
}
