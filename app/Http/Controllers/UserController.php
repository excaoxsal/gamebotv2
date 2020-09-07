<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Requests;
use App\Berita; 
use App\User;
use App\Gambar;
use App\Isi_berita;
// use app\Auth;

//menampung setiap bentuk perintah yang berhubungan dengan simpan menyimpan

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul_berita' => 'required',
            'pembuka'=> 'required',
            'file' => 'required',
            'filecontent',
            'berita_isi',
            'id_tipe'
        ]);
        if (!Berita::where('judul_berita', $request->input('judul_berita'))->first())
        {
            // dd($request->id_tipe);
            $berita=Berita::create([
                'judul_berita'=>$request->judul_berita,
                'pembuka'=>$request->pembuka,
                'user_id'=>\Auth::user()->id,
                'id_tipe'=>$request->id_tipe
            ]);
            $id_berita=$berita->id;
            $isi=$request->berita_isi;
            // $isi=Isi_berita::all();

            // dd($isi);
            foreach ($isi as $keys => $values) {
                        // $i=0;
                 // dd(is_array($isi) ? 'true' : 'false');
                // dd($isi);
                        // dd($value);
                if ($values==null) {
                    continue;
                }
                 // dd($values);
                $isinya=$values;
            $isi_berita=Isi_berita::create([
                'berita_id'=>$id_berita,
                'berita_isi'=>$isinya
            ]);
            
            }

            if($berita==true && $isi_berita==true){
                $this->validate($request, [
                    'file' => 'required|file|image|mimes:jpeg,png,jpg'
                ]);
                // menyimpan data file yang diupload ke variabel $file
                $file = $request->file('file');
                $nama_file = $file->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'gambar_header';
                $file->move($tujuan_upload,$file->getClientOriginalName());
                $path= $tujuan_upload.DIRECTORY_SEPARATOR.$file->getClientOriginalName();
                $gambar=Gambar::create([
                    'file' => $nama_file,
                    'keterangan' => $path,
                    'berita_id'=>$id_berita
                ]);
                if ($gambar==true) {
                    $this->validate($request, [
                        'filecontent'
                    ]);
                    $filecontent = $request->file('filecontent');
                    foreach ($filecontent as $key => $value) {
                        // $i=0;
                        // dd($value);
                        if ($value==null) {
                            continue;
                        }
                        // $i++;
                        $nama_files = $value->getClientOriginalName();
                        $data = $nama_files;
                    // dd($data);
                    // isi dengan nama folder tempat kemana file diupload
                        $tujuan_uploads = 'gambar_content';
                        $value->move($tujuan_uploads,$value->getClientOriginalName());
                        $paths= $tujuan_uploads.DIRECTORY_SEPARATOR.$value->getClientOriginalName();
                        $gambars=Gambar::create([
                            'filecontent' => $data,
                            'keterangan' => $paths,
                            'berita_id'=>$id_berita
                        ]);
                    }
                    if ($gambars==true) {
                        \Session::flash('message', "Data sudah tersimpan");
                        return \Redirect::back();
                    }else{
                        Berita::where('id_berita',$id_berita)->delete();
                        Isi_berita::where('berita_id',$id_berita)->delete();
                        Gambar::where('berita_id',$id_berita)->delete();
                        Gambar_Isi::where('berita_id',$id_berita)->delete();
                        return \Redirect::back()->withErrors(['Gambar Content Error']);
                    }
                }else{
                    Berita::where('id_berita',$id_berita)->delete();
                    Isi_berita::where('berita_id',$id_berita)->delete();
                    Gambar::where('berita_id',$id_berita)->delete();
                    return \Redirect::back()->withErrors(['Gambar Header Error']);
                }
            }else{
                Berita::where('id_berita',$id_berita)->delete();
                Isi_berita::where('berita_id',$id_berita)->delete();
                return \Redirect::back()->withErrors(['Gambar Error']);
            }
            // dd($request);   
        }else{
            // dd($request);
            return \Redirect::back()->withErrors(['Judul berita sudah ada, mohon diganti.']);
        }
    }

    //end of line

    public function upload(){
        return view('upload');
    }

    //end of line

    public function upload_gambar(Request $request){//,$berita_id $file
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
        $file = $file->file('file');//
        
                // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
        
        //         // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
        
                // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
        
        //         // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';
        
        //         // tipe mime
        // echo 'File Mime Type: '.$file->getMimeType();
        
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $gambar=Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
            'id_berita'=>$berita_id
        ]);
        if($gambar==true){
            return true;
        }
        else{
            return false;
        }
    }

    //end of line

    public function uploadberita(){
        $this->store();
        return \Redirect::back();
    }

    //end of line

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->validate($request,[
            'judul_berita' => 'required',
            'pembuka'=> 'required',
            'file' => 'required',
        ]);
        if (!Berita::where('judul_berita', $request->input('judul_berita'))->first())
        {
            $berita=Berita::update([
                'judul_berita'=>$request->judul_berita,
                'pembuka'=>$request->pembuka,
                'user_id'=>\Auth::user()->id,
            ]);
            $id_berita=$berita->id;
            if($berita==true){
                $this->validate($request, [
                    'file' => 'required|file|image|mimes:jpeg,png,jpg'
                ]);
                // menyimpan data file yang diupload ke variabel $file
                $file = $request->file('file');
                $nama_file = $file->getClientOriginalName();
                

                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'data_file';
                $file->move($tujuan_upload,$file->getClientOriginalName());
                $path= $tujuan_upload.DIRECTORY_SEPARATOR.$file->getClientOriginalName();
                $gambar=Gambar::update([
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
                return \Redirect::back()->withErrors(['Judul berita sudah ada, mohon diganti.']);
            }
            
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
