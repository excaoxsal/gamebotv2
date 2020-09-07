<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $fillable=['file','keterangan','berita_id'];
    protected $table = "gambar";
    public function berita(){
    	return $this -> belongsTo('App\Berita','id_berita','berita_id');
    }
}

