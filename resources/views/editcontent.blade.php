@extends('layouts.app')

@section('content')
@if (Auth::guest())
<div class="alert alert-danger">
        <ul><li></li><div class="alert alert-info">Silahkan Login terlebih dahulu</div>
          </ul>
@else
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
          @elseif (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
        </ul>
      </div><br/>
      @endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Berita</div>
                <div class="panel-body">
                  
                    <form class="form-horizontal" role="form" method="post" action="{{ url('edit/simpan_edit') }}" enctype="multipart/form-data" >
                      
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('judul_berita') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Judul Berita</label>
                            <input type="text" name="id_berita" value="{{$berita['id_berita']}}" hidden="true">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="judul_berita" value="{{$berita['judul_berita']}}">

                                @if ($errors->has('judul_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_berita') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isi_berita') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Isi Berita</label>

                            <div class="col-md-6">
                                <textarea id="isi_berita" type="textarea" class="form-control" name="isi_berita" size="10x10">{{$berita['isi_berita']}}</textarea>
                                @if ($errors->has('isi_berita'))
                                    <span class="help-block">
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">File Gambar</label>
                          <div class="col-md-6">
                          <input type="file" name="file" value="{{old('file')}}">
<!-- {{$gambar['file']}} -->
                          <span class="help-block">
                                    </span>
                        </div>
                      </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Cek
                                </button>
                            </div>
                        </div>

                        

                        

                        

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection