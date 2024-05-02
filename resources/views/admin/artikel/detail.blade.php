@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <div class="clearfix">
                        <div class="float-left">
                            Detail Artikel - <strong>{{ $artikel->judul }} - {{ $artikel->nama_kategori }}</strong>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('artikel.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ asset('images/artikel/' . $artikel->foto) }}" alt="{{ $artikel->judul }}" width="50%" class="img-thumbnail"><br><br>
                    {!! $artikel->isi !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
