<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'jenis', 'tanggal', 'total',
    ];

    public function laporan()
    {
    	return $this->hasMany('App\Pesanan');
    }
}
