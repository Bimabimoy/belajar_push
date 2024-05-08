<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Barang</title>
    <link rel="stylesheet" href="{{ asset('css/form_style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Form Peminjaman Barang</h1>

        {{-- <form action="{{ route('proses.peminjaman') }}" method="POST" class="form"> --}}
          <form>
            @csrf
            <div class="form-group">
                <label for="barang">Pilih Barang:</label><br>
                {{-- <select name="barang" id="barang" class="input-field">
                  @foreach ($barang as $barang)
                      <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                  @endforeach
              </select> --}}

              {{-- @foreach ($barangs as $barang)
    <p>{{ $barang->nama }}</p>
    <!-- Tampilkan data barang lainnya sesuai kebutuhan -->
@endforeach --}}

<tbody>
  @foreach($barang as $index => $value)
      <tr id="row-num-{{ $value['id'] }}">
          {{-- <td><a href="{{ route('backoffice.users.show', $li['id']) }}">{{ucwords($li['name'])}}</td> --}}
          {{-- <td> {{$value['nama']}} </td> --}}
          {{-- <td>{{ucwords($li['status'] ?? '-') }}</td>
          <td>{{ucwords($li['role'] ?? '-') }}</td> --}}

          {{-- <input type="hidden" name="id_barang[]" value="{{ $value->id }}"> --}}
          
          {{-- <td> {{$index+1}} </td> --}}
          <td> {{$value->nama}} </td>
          <td> {{$value->gambar}} </td>
          {{-- <td> {{$value->barang_baik}} </td> --}}
          <td> 
              <div class="form-check text-center">
              <input class="form-check-input" type="checkbox" name="id_barang[]" value="{{ $value->id }}" id="flexCheckDefault">
              {{-- <label class="form-check-label" for="flexCheckDefault">
                
              </label> --}}
            </div>
          </td>

              
            </div>

            {{-- <select name="barang" id="barang" class="input-field">
              @foreach ($barangs as $barang)
                  <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
              @endforeach
          </select> --}}
          

            <div class="form-group">
                <label for="jumlah">Jumlah:</label><br>
                <input type="number" id="jumlah" name="jumlah" min="1" class="input-field">
            </div>

            <!-- Tambahkan input untuk data peminjam lainnya -->

            <button type="submit" class="btn">Pinjam Barang</button>
        </form>
    </div>
</body>
</html>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container {
  width: 50%;
  margin: 50px auto;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.form {
  display: flex;
  flex-direction: column;
}

.form-group {
  margin-bottom: 20px;
}

.input-field {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btn {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #0056b3;
}
