@extends('base')
@section('content')
<div class="justify-center items-center md:flex bg-white h-screen md:flex grid grid-row-2 flex-col gap-16 bg-dev">
<div class="all">
    <h1 class="text-7xl font-bold text-gray-300 fade1">Developers</h1>
</div>
<div class="flex gap-8 all fade4">


    <div class="card bg-gray-800 rounded-xl border border-sky-500 border-double border-4">   
            <div class="card_front rounded-xl"> <a href="https://www.instagram.com/ericyyoel/"><img src="{{url('ppalya.jpg')}}" alt="" class="rounded-full border-8 w-40"></a></div>
            <div class="card_back rounded-xl text-gray-800 bg-white "><p class="font-bold text-4xl">Eric Yoel</p></div>
    </div>

    <div class="card bg-gray-800 rounded-xl border border-sky-500 border-double border-4">   
            <div class="card_front rounded-xl"> <a href="https://www.instagram.com/ericyyoel/"><img src="{{url('ppsw.jpg')}}" alt="" class="rounded-full border-8 w-40"></a></div>
            <div class="card_back rounded-xl text-gray-800 bg-white "><p class="font-bold text-4xl">Misael Yosa</p></div>
    </div>

    <div class="card bg-gray-800 rounded-xl border border-sky-500 border-double border-4">   
            <div class="card_front rounded-xl"> <a href="https://www.instagram.com/farrellyunanto//"><img src="{{url('ppff.jpg')}}" alt="" class="rounded-full border-8 w-40"></a></div>
            <div class="card_back rounded-xl text-gray-800 bg-white "><p class="font-bold text-4xl">Farrell Yunanto</p></div>
    </div>

</div>
</div>
@endsection