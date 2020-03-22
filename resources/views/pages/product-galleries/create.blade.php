@extends('layouts.default')

@section('content')
    <div class="card">
    <div class="car-header ml-4 mt-4">
        <strong>Tambah Foto Produk</strong>
    </div>
    <hr>
    <div class="card-body card-block">
        <form action="{{ route('product-galleries.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="form-control-label">Nama Produk</label>
       <select name="products_id" class="form-control  @error('products_id') is-invalid @enderror">
        @foreach ($products_id as $product)
       <option value="{{$product->id}}">{{$product->name}}</option>
        @endforeach
      </select>
      @error('products_id') <div class="text-muted">{{$message}} </div> @enderror
        </div>  
         
        <div class="form-group">
        <label for="photo" class="form-control-label">Foto Produk</label>
        <input type="file" name="photo"  accept="image/*" 
        class="form-control @error('photo') is-invalid @enderror"/>
        @error('photo') <div class="text-muted">{{$message}} </div> @enderror
        </div>  

        <div class="form-group">
        <label for="is_default" class="form-control-label">Jadikan Default</label>
        <br>
       <label>
        <input type="radio" name="is_default" value="1"  
        class="form-control @error('is_default') is-invalid @enderror"/>
            Yes </label> &nbsp;   
        @error('is_default') <div class="text-muted">{{$message}} </div> @enderror
        <label>
        <input type="radio" name="is_default" value="0"  
        class="form-control @error('is_default') is-invalid @enderror"/> No  </label>
        @error('is_default') <div class="text-muted">{{$message}} </div> @enderror

        </div>  
     
       
        <div class="form-group">
        <button type="submit"  class="btn btn-success btn-block">Tambah Foto Produk</button>
        </div>
        </form>
    </div>
    </div>

    @endsection