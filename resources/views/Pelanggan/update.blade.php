@extends('base')
@section('content')
<div class="text-center">
<h1>EDIT</h1>
<form action="{{route('Pelanggan.update')}}" method="post">
<label for="edit">Pilih update</label>
<select name="pilih" id="">
    @foreach($pelanggan as $p)
    <option value="{{$p->id}}">{{$p->nama}}</option>
</select>

<button type="submit">Submit</button>
</form>

</div>
@endsection