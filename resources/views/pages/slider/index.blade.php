@extends('layouts.default')

@section('content')
    
<div class="orders">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="box-titlle"><a class="btn btn-outline-success btn-sm" href="{{ route('slider.create') }}"> Tambah Slider</a>  &nbsp; | &nbsp; Data Slider   </h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-tabele ov-h">
                    <table class="table">
                        <thead>
                    <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Url</th>
                    <th>Deskripsi</th>
                    <th>Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($items ?? '' as $item)
                        <tr>    
                        <td>{{ $item->id }}</td>
                        <td><img src="{{ url($item->foto) }}"></td>  
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->url }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                        {{-- <a href="{{route('products.gallery', $item->id)}}" class="btn btn-info btn-sm">
                             --}}
                          <a href="{{route('slider.edit', $item->id)}}" class="btn btn-warning btn-sm">
                            <i class="fa fa-pencil"></i></a>
                            <form action="{{route('slider.destroy', $item->id)}}" method="post" class="d-inline">
                            
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center p-5">
                            Data Belum ada
                        </td>
                    </tr>
                @endforelse
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection