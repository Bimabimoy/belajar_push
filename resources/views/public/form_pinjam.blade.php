@extends('public.layouts.main')

@section('title')
    {{-- Peminjaman Peralatan {{$jurusan}} --}}
@endsection

@section('content')

    <!-- Isi lain dari view create -->
    <nav class="navbar navbar-expand-lg navbar-light bg-header">
        <div class="container-fluid">
            <a href="{{ route('public.homepage') }}" id="sidebarleftbutton"
                class="btn"><i class="fas fa-chevron-left"></i></a>
            <div class="title">{{$jurusan}}</div>
            <button type="button" id="sidebarleftbutton" class="btn" data-toggle="modal" data-target="#loginpage">
               
            </button>
            
            @if(auth()->check())
            <!-- Jika pengguna sudah login -->
            <button type="button" id="sidebarrightbutton" class="btn">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </button>
        @else
   
        @endif
        </div>
    </nav>

    <div id="content">
        <div class="content-wrap page-news">
            <div class="subsite">
                <div class="row">
                    <div class="col-md-12 form-contact">
                        <form action="/public/peminjaman" method="POST">
                            @csrf
                            <input type="hidden" name="jurusan" value="{{$jurusan}}">
                            <input type="hidden" name="kode_jurusan" value="{{$kode_jurusan}}">
                            <div class="tab-comment mt-4">
                                <div class="subsite-heading text-center">Form Peminjaman</div>
                                <div class="subsite-heading text-center mb-4">{{$jurusan}}</div>
                                <div class="add-new-comment">
                                    <input class="nm mb-3" type="text" name="nama" placeholder="nama Lengkap*" value="{{ $user->name }}">
                                    <input class="nm mb-3" type="text" name="kelas" placeholder="kelas*" value="{{ $user->kelas}}" readonly>
  
                                    <tr>
                                        <td><label for="waktu1">Waktu pinjam :</label></td>
                                        <td><input  type="time" id="waktu1" name="Jam_mulai"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="waktu2">Waktu kembali:</label></td>
                                        <td><input type="time" id="waktu2" name="Jam_berahir"></td>
                                    </tr>
                                    
                                    <input class="nm mb-3" type="text" name="pengajar" placeholder="pengajar*" required>

    
                                    <td><label for="waktu1">Tanggal pinjam:</label></td>

                                    <input class="nm mb-3" type="date" name="tanggalpinjam" placeholder="tanggalpinjam*" required>
                                    <td><label for="waktu1">Tangal Kembali:</label></td>

                                    <input class="nm mb-3" type="date" name="tanggalkembali" placeholder="tanggalkembali*" required>





                                    {{-- <textarea style="width: 450; height: 150px;" class="nm mb-3" name="namabarang" placeholder="Nama Barang"></textarea> --}}
                                    <div class="subsite-heading text-center">
                                        <h3>Data Barang {{$jurusan}}</h3>
                                    </div>
                                    <table id="admin-table" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Gambar</th>
                                                <th>Stok Barang Baik</th>
                                                <th>Pinjam Barang</th>
                                                <th>Jumlah Peminjaman</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($barang as $index => $value)
                                            <tr id="row-num-{{ $value['id'] }}">
                                                
                                                
                                                <td> {{$index+1}} </td>
                                                <td> {{$value->nama}} </td>
                                                <td> {{$value->gambar}} </td>
                                                <td> {{$value->barang_baik}} </td>
                                                <td> 
                                                    <div class="form-check text-center">
                                                    <input class="form-check-input" type="checkbox" name="id_barang[]" value="{{ $value->id }}" id="flexCheckDefault">
                                                    
                                                  </div>
                                                </td>
                                                <td> 
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="number" name="jumlah_barang[]" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Jumlah Pinjam Barang
                                                    </label>
                                                  </div>
                                                </td>
                                            </tr> 
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="button mt-4">
                                        <button type="submit" class="btn-submit">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
<script>
    
    // Ketika dropdown dengan id "pilihan" berubah
    $('#pilihan').change(function() {
        var selectedValue = $(this).val();
        var dropdown = $('#pilihan');

        // Bersihkan semua opsi kecuali opsi kosong
        dropdown.find('option').not(':first').remove();

        // Tambahkan opsi-opsi berdasarkan pilihan pengguna
        if (selectedValue === 'nilai1') {
            dropdown.append('<option value="nilai2">Pilihan 2</option>');
            dropdown.append('<option value="nilai3">Pilihan 3</option>');
        } else if (selectedValue === 'nilai2') {
            dropdown.append('<option value="nilai1">Pilihan 1</option>');
            dropdown.append('<option value="nilai3">Pilihan 3</option>');
        } else if (selectedValue === 'nilai3') {
            dropdown.append('<option value="nilai1">Pilihan 1</option>');
            dropdown.append('<option value="nilai2">Pilihan 2</option>');
        }
    });
</script>

@endsection

