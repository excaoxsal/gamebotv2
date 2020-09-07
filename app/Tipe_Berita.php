<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe_Berita extends Model
{
	protected $fillable=['id_tipeberita','tipe_berita'];
    protected $table = "tipe_berita";
    public function berita()
    {
        return $this->hasMany('App\Berita', 'id_tipe','id_tipeberita');
    }
}
