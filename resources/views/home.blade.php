@extends('base')
@section('content')
    <div class="bg-cover bg-center bg-no-repeat bg-contain background min-h-screen">
        <div class="relative isolate  pt-14 bg-black-100 ">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 ">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 fade2">
                        Lets go to our full showcase <a href="{{url('items')}}" class="font-semibold text-indigo-800"><span
                                class="absolute inset-0" aria-hidden="true"></span>Shop <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center fade1">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-6xl">Welcome to AniBuss</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Where anime and bussiness collab become one. We are a
                        new company that work within the range of anime items all over the world</p>
                    <div class="mt-10">
                        <div class=" overflow-x-auto snap-mandatory snap-x bg-gray-800 mx-4  rounded-xl fade3">
                            <div class="flex space-x-6 px-4 min-w-max rounded-xl scroll-pl-6">
                                <div class="snap-center w-32 m-2 rounded-t-xl border-t border-x-slate-800 border-b anim">
                                    <a href="{{ url('items') }}">
                                        <div class="image">
                                            <img src="{{ url('evangelion.jpg') }}" alt="" class="rounded-t-xl">
                                        </div>
                                        <div class="text-white my-2">
                                            <h4>Art Commission</h4>
                                        </div>
                                    </a>
                                </div>
                                <div
                                    class="snap-center w-32 m-2 rounded-t-xl border-t border-t-lime-500 border-x-slate-800 border-b border-b-lime-500 anim">
                                    <a href="{{ url('items') }}">
                                        <div class="image">
                                            <img src="{{ url('genshinmerch.jpg') }}" alt="" class="rounded-t-xl">
                                        </div>
                                        <div class="text-white my-2">
                                            <h4>Merchandice</h4>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="snap-center w-32 m-2 rounded-t-xl border-t border-t-cyan-500 border-x-slate-800 border-b border-b-cyan-500 anim">
                                    <a href="{{ url('items') }}">
                                        <div class="image">
                                            <img src="{{ url('animetshirt.jpg') }}" alt="" class="rounded-t-xl">
                                        </div>
                                        <div class="text-white my-2">
                                            <h4>T-Shirts</h4>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="snap-center w-32 m-2 rounded-t-xl border-t border-t-indigo-500 border-x-slate-800 border-b border-b-indigo-500 anim">
                                    <a href="{{ url('items') }}">
                                        <div class="image">
                                            <img src="{{ url('mangabook.jpg') }}" alt="" class="rounded-t-xl">
                                        </div>
                                        <div class="text-white my-2">
                                            <h4>Manga Books</h4>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="snap-center w-32 m-2 rounded-t-xl border-t border-t-pink-500 border-x-slate-800 border-b border-b-pink-500 anim">
                                    <a href="{{ url('items') }}">
                                        <div class="image">
                                            <img src="{{ url('figures.jpg') }}" alt="" class="rounded-t-xl">
                                        </div>
                                        <div class="text-white my-2">
                                            <h4>Figures</h4>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="snap-center w-32 m-2 mx-4 rounded-t-xl border-t border-t-amber-500 border-x-slate-800 border-b border-b-amber-500 anim">
                                    <a href="{{ url('items') }}">
                                        <div class="image">
                                            <img src="{{ url('caing.jpg') }}" alt="" class="rounded-t-xl">
                                        </div>
                                        <div class="text-white my-2">
                                            <h4>Casings</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="place-content-center snap-center w-32 mx-4 py-2">

                                    <div class="text-white border border-white rounded-full hover:border-cyan-600 ">
                                        <a href="{{ url('items') }}">
                                            <h4 class="text-white-800"> More Items <span aria-hidden="true">&rarr;</span>
                                            </h4>
                                        </a>
                                    </div>
                                </div>






                            </div>
                            <!-- Tambahkan lebih banyak elemen di sini -->
                        </div>
                        <!-- <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
