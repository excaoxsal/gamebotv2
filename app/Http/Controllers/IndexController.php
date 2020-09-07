<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Gambar;
use App\Berita;
use File;
class IndexController extends Controller
{
    public function show(){
        $gambar = Gambar::get();
        $berita = Berita::with('gambar')->get();
        // dd($gambar); 
        return view('index',['gambar' => $gambar,'berita'=>$berita]);
    }
    public function shows($id_berita){
        $berita = Berita::where('id_berita',$id_berita)->first();
        $gambar = Gambar::where('berita_id',$id_berita)->first();
        // $berita = Berita::with('gambar')->get();
        // dd($berita); 
        return view('content', array(
        'berita' => $berita,
        'gambar' => $gambar));
        // return view('content',['gambar' => $gambar,'berita'=>$berita]);
    }
}
?>
