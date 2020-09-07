@extends('layouts.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
          <div class="panel-heading">Tambah Berita</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" >
              <!-- {{ csrf_field() }} -->
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <!-- Judul berita -->
              <div class="form-group{{ $errors->has('judul_berita') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Judul Berita</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="judul_berita" value="{{ old('judul_berita') }}" >

                  @if ($errors->has('judul_berita'))
                  <span class="help-block">
                    <strong>{{ $errors->first('judul_berita') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <!-- Isi berita -->
              <div class="form-group{{ $errors->has('pembuka') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Kalimat pembuka</label>

                <div class="col-md-6">
                  <textarea id="emails" type="textarea" class="form-control" name="pembuka" size="10x10">{{{old('pembuka') }}}</textarea>

                  @if ($errors->has('pembuka'))
                  <span class="help-block">
                  </span>
                  @endif
                </div>
              </div>
              <!-- jenis berita -->
              <div class="form-group{{ $errors->has('judul_berita') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Jenis Berita</label>

                <div class="col-md-6">
                  <select selected="Pilih" name="id_tipe" selected><option selected>.....
                    @foreach($tipe_berita as $tb) 
                    <option name="id_tipe" value="{{$tb['id_tipeberita']}}">{{$tb['tipe_berita']}}</option>
                    @endforeach
                  </option>
                </select>

                @if ($errors->has('judul_berita'))
                <span class="help-block">
                  <strong>{{ $errors->first('judul_berita') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Header Gambar</label>
              <div class="col-md-6">
                <input type="file" name="file" value="{{ old('file') }}">
                <span class="help-block">
                </span>
              </div>
            </div>
             <div class="input-group control-group increment" >
          <input type="file" name="filecontent[]" class="form-control">
          <textarea id="emailz" type="textarea" class="form-control" name="berita_isi[]" size="10x10">{{{old('berita_isi[]')}}}</textarea>
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filecontent[]" class="form-control">
            <textarea id="emails" type="textarea" class="form-control" name="berita_isi[]" size="10x10">{{{old('berita_isi[]')}}}</textarea>
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
            <!-- Gambar header -->
            <!-- <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">File Gambar</label>
              <div class="col-md-6">
                <input type="file" name="file" value="{{ old('file') }}">
                <span class="help-block">
                </span>
              </div>
            </div> -->
            <!-- Gambar isi content -->
            <!-- <div class="form-group{{ $errors->has('filecontent[]') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Gambar Content</label>
              <div class="col-md-6">
                <input type="file" name="filecontent[]" value="{{ old('filecontent[]') }}">
                <span class="help-block">
                </span>
              </div>
            </div> -->

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
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection