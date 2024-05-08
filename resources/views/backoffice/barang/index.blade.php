@extends('layouts.main')
@section('content')




<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Barang </h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
            <thead>
                <tr>
                    <th>nama</th>
                    <th>deskripsi</th>
                    <th>Sales</th>
                    <th>More</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($barang)
                    @foreach($barang as $barang)
                    <tr>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->deskripsi }}</td>
                        <td>{{ $barang->gambar }}</td>
                        <td>{{ $barang->level_teknologi }}</td>
                        <td>
                            <!-- Tombol Update -->
                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            
                            <!-- Tombol Delete -->
                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>



@endsection