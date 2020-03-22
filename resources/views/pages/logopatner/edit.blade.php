@extends('layouts.default')

@section('content')
    <div class="card">
    <div class="car-header ml-4 mt-3">
        <strong>Edit Url Logo</strong>
    </div>
    <hr>
    <div class="card-body card-block">
        <form action="{{ route('logopatner.update', $item->id) }}" method="post">
            @method('PUT')
        @csrf
        <div class="form-group">
            <label for="url" class="form-control-label">url</label>
        <input type="text" name="url" value="{{old('url') ? old('url') : $item->url }}" 
        class="form-control @error('url') is-invalid @enderror"/>
        @error('url') <div class="text-muted">{{$message}} </div> @enderror
        </div>      
      
        <div class="form-group">
        <button type="submit"  class="btn btn-success btn-block">Simpan</button>
        </div>
        </form>
    </div>
    </div>

    @endsection