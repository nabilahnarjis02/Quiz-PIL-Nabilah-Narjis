@extends('template')
    
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Absensi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('absensis.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops</strong> Anda salah menginputkan data absensi.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('absensis.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
 
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Absen:</strong>
                <input type="time" name="waktu_absen" class="form-control" placeholder="Waktu Absen">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mahasiswa Id:</strong>
                <input type="varchar" name="mahasiswa_id" class="form-control" placeholder="Mahasiswa Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matakuliah Id:</strong>
                <input type="varchar" name="matakuliah_id" class="form-control" placeholder="Matakuliah Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                <input type="varchar" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
           -12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection