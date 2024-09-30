@extends('base')
@section('content')
<h2 class="text-center">INOUT DATA</h2>
<form class="text-center" action="{{route('Pelanggan.insert')}}" method="POST">
    @csrf
    <div>
        
        <label for="nama">Nama</label>
        <input type="text" class="form-control"name = "nama" id="">
    </div>
    <div>
        <label for="tahun_masuk">Tanggal Masuk</label>
        <input type="number" class="form-control"name = "tahun_masuk" id="">
        
    </div>
    <div>
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control"name = "tgl_lahir" id="">

    </div>
    <div>

        <label for="alamat">Alamat</label>
        <input type="text" class="form-control"name = "alamat" id="">
    </div>
    <div>

        <label for="notelp">No. Telp</label>
        <input type="text" class="form-control"name = "notelp" id="">
    </div>
    <div>
        <label for="referensi">Referensi</label>
        <select name="referensi" id="">
            @foreach($pelanggan as $p)
            <option value="{{$p->id}}">{{$p->nama}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Save</button>
    </div>


</form>
@endsection