@extends('layouts.default')

@section('content')
    <div class="card">
    <div class="car-header ml-4 mt-4">
        <strong>Tambah Slider</strong>
    </div>
    <hr>
    <div class="card-body card-block">
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="judul" class="form-control-label">Judul</label>
        <input type="text" name="judul" value="{{old('judul') }}" 
        class="form-control @error('judul') is-invalid @enderror"/>
        @error('judul') <div class="text-muted">{{$message}} </div> @enderror
        </div>  
        <div class="form-group">
            <label for="url" class="form-control-label">url</label>
            <input type="text" name="url" value="{{old('url') }}" 
            class="form-control @error('url') is-invalid @enderror"/>
            @error('url') <div class="text-muted">{{$message}} </div> @enderror
            </div>  
        <div class="form-group">
            <label for="deskripsi" class="form-control-label">deskripsi</label>
        <input type="text" name="deskripsi" value="{{old('deskripsi') }}" 
        class="form-control @error('deskripsi') is-invalid @enderror"/>
        @error('deskripsi') <div class="text-muted">{{$message}} </div> @enderror
        </div>  
         
        <div class="form-group">
        <label for="foto" class="form-control-label">Foto Slider</label>
        <input type="file" name="foto"  accept="image/*" 
        class="form-control @error('foto') is-invalid @enderror"/>
        @error('foto') <div class="text-muted">{{$message}} </div> @enderror
        </div>  
       
        <div class="form-group">
        <button type="submit"  class="btn btn-success btn-block">Tambah Slider</button>
        </div>
        </form>
    </div>
    </div>

    @endsection