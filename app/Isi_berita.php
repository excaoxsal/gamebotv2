<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isi_berita extends Model
{
   protected $fillable=['berita_isi','berita_id'];
    protected $table = "berita_isi";
    public function berita(){
    	return $this -> belongsTo('App\Berita','id_berita','berita_id');
    }
}
