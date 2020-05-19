<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'alamat', 'birthdate', 'gender', 'email', 'noHP',
    ];

    public function account(){
    	return $this->belongsTo('App\User');
    }
}
