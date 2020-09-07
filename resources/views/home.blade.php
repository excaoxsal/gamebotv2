@extends('layouts.app')

@section('content')

        <!-- <ul>
          @if (Session::has('message'))
          <div class="alert alert-info">{{ Session::get('message') }}</div>
        </ul>
      </div><br/>
      @endif -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th>Judul Berita</th>
                            <th width="1%">File</th>
                            <th width="20%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($berita as $b) 
                        <tr>
                            <td>{{$b->judul_berita}}</td>
                            <td>@foreach($b->gambar as $g)
                                <img width="150px" src="{{ url('/gambar_header/'.$g->file) }}">@endforeach</td>
                            <td><a class="btn btn-primary" href="/content/{{ $b->id_berita }}">LIHAT</a>
                            <a class="btn btn-info" href="/edit/{{ $b->id_berita }}">EDIT</a>
                            @foreach($b->gambar as $g)<a class="btn btn-danger" href="/home/hapus/{{ $b->id_berita }}">HAPUS</a>@endforeach
                            </td>
                        </tr>
                        @endforeach
                        <div class="input-group-btn"> 
                        <a href="/createcontent"><button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button></a>
                        </div>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
