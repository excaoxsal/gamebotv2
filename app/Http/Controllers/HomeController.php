<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Gambar;
use App\Berita;
use App\User;
use App\Tipe_Berita;
use App\Isi_berita;
use File;

// setiap tindakan yang terjadi pada page home
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();

        return view('home',['berita'=>$berita]);
    }
    public function upload(){
        $gambar = Gambar::get();
        $berita = Berita::with('gambar')->get();
        // dd($berita); 
        return view('home',['gambar' => $gambar,'berita'=>$berita]);
    }
    public function hapus($id_berita){
    // hapus file
        $berita = Berita::where('id_berita',$id_berita)->first();
        $gambar = Gambar::where('berita_id',$id_berita)->first();
        $gambars = Gambar::where('berita_id',$id_berita)->first();
        File::delete('data_file/'.$gambar->file);

    // hapus data
        Isi_berita::where('berita_id',$id_berita)->delete();
        Gambar::where('berita_id',$id_berita)->delete();
        Gambar::where('berita_id',$id_berita)->delete();
        Berita::where('id_berita',$id_berita)->delete();
        

        return redirect()->back();
    }

    public function edit($id_berita) {
      $berita = Berita::where('id_berita',$id_berita)->first();
      $gambar = Gambar::where('berita_id',$id_berita)->first();

      return view('editcontent', array(
        'berita' => $berita,
        'gambar' => $gambar
    ));
  }
  public function simpan_edit(Request $request){
    $this->validate($request,[
            'judul_berita' => 'required',
            'isi_berita'=> 'required',
            'file'=>'required|file',
            'id_berita'
        ]);
        if (!Berita::where('judul_berita', $request->input('judul_berita'))->first())
        {
            // dd($request->judul_berita); 
            $berita=Berita::where('id_berita', $request->input('id_berita'))->update([
                'judul_berita'=>$request->input('judul_berita'),
                'isi_berita'=>$request->input('isi_berita'),
                'user_id'=>\Auth::user()->id,
            ]);
            $id_berita=$request->id_berita;
            // dd($berita);
            $gambar = Gambar::where('berita_id',$id_berita)->first();
            File::delete('data_file/'.$gambar->file);
            if($berita==true){
                $this->validate($request, [
                    'file' => 'required|file'
                ]);
                // menyimpan data file yang diupload ke variabel $file
                $file = $request->file('file');
                // dd($file);   
                $nama_file = $file->getClientOriginalName();
                
                // dd($file);
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'gambar_header';
                $file->move($tujuan_upload,$nama_file);
                $path= $tujuan_upload.DIRECTORY_SEPARATOR.$file->getClientOriginalName();
                $gambar=Gambar::where('berita_id', $id_berita)->update([
                    'file' => $nama_file,
                    'keterangan' => $path,
                    'berita_id'=>$id_berita
                ]);
                
                if ($gambar==true) {
                    \Session::flash('message', "Data sudah tersimpan");
                    return \Redirect::back();
                }
                else{
                    return \Redirect::back()->withErrors(['Gambar Error']);
                }
            }
            else{
                    return \Redirect::back()->withErrors(['Data tidak bisa masuk']);
                }
            
            
        }
        else{
                return \Redirect::back()->withErrors(['Judul berita sudah ada, mohon diganti.']);
            }
  }
  public function show($id_berita){
        $user = User::where('id',$id_berita)->first();
        $berita = Berita::where('id_berita',$id_berita)->first();
        $gambar = Gambar::where('berita_id',$id_berita)->first();
        $berita_isi = Isi_berita::where('berita_id',$id_berita)->first();
        // foreach ($berita_isi as $key => $value) {
        // $array1 = array(c'berita_isi' => $berita_isi, );
        // }
        // foreach ($gambar_isi as $key => $value) {
        //     $array2 = array('gambar_isi' => $gambar_isi, );
        // }
        $berita = Berita::with('gambar','berita_isi')->where('id_berita',$id_berita)->first();
        dd($berita->toArray());
        $reformatContent = [];
        $berita = collect($berita)->map(function($query) {
           $reformatContent['berita_isi'] = $query->berita_isi->berita_isi;
           $reformatContent['gambar'] = $query->gambar->keterangan;
           return $reformatContent;
        });
        dd($berita);
        // dd(is_array($array1));
        // dd($array1);
        // dd(is_array($arraymer));
        // $berita = Berita::with('gambar')->get();
        $ulang = Gambar::where('berita_id',$id_berita)->count();
        // dd($ulang);
        return view('content', [
        'berita' => $berita,
        'gambar' => $gambar,
        'berita_isi'=>$berita_isi]);
        // return view('content',['gambar' => $gambar,'berita'=>$berita]);
    }
    public function tampil_tipe(){
        $tipe_berita = Tipe_Berita::get();
        // dd($berita); 
        return view('createcontent',['tipe_berita' => $tipe_berita]);
    }

    // public function relation(){

    //     return view
    // }
    // public function asw(){

    // } 
}

