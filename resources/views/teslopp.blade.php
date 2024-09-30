@extends('base')
@section('content')
<div>


        <table class="table-fixed">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Lahir</th>
                    <th>History Pembelian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->tahun_masuk}}</td>
                        <td>{{$item->tgl_lahir}}</td>
                        <td>
                            @foreach($item->pembelian as $p)
                                {{$p->nomer_pembelian}} <br>
                               
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <table class="table-fixed">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nomer_barang</th>
                    <th>Pelanggan_id</th>
                    <th>Nama Pelanggan</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($pembelian as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nomer_pembelian}}</td>
                        <td>{{$item->pelanggan_id}}</td>
                        <td>{{$item->pelanggan->nama}}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection