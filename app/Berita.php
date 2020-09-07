<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul_berita', 'pembuka','user_id','id_tipe'];
    protected $table = "berita";
    public function gambar(){
    	return $this -> hasMany('App\Gambar','berita_id','id_berita');
    }
    public function tipe_berita()
    {
        return $this->belongsTo('App\Tipe_Berita', 'id_tipeberita','id_tipe');
    }
    public function berita_isi(){
        return $this -> hasMany('App\Isi_berita','berita_id','id_berita');
    }
}
