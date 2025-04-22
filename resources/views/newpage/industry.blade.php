@extends('layouts.frontendnew')

@section('content')
    <div class="w-full bg-gray-100">
        <div class="w-full h-350"><img src="{{ url('img/umkm/banner.png') }}" alt=""
                class="object-cover h-full w-full bg-center"></div>


        <div class="w-4/5 mx-auto">
            <div class="flex flex-col w-3/4 gap-2 mt-12 bg-gray-100">
                <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tighter text-blue-900 bg-gray-100">
                    Industries
                </p>
                <div class="flex bg-gray-100">
                    <hr class="border border-hijau w-10 h-1 bg-hijau">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>

                <p class="text-lg font-roboto text-justify text-blue-900 mt-10 bg-gray-100">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>

            <div class="grid md:grid-cols-4 grid-cols-2 gap-12 py-20 bg-gray-100">


                @for ($i = 0; $i < 8; $i++)
                    <div class="flex flex-col gap-2 bg-white px-4">
                        <div class="w-full h-200">
                            <img src="{{ url('img/umkm/pt.png') }}" alt="Image" class="w-full h-full object-cover ">

                        </div>
                        <p class="md:text-xl text-lg font-roboto text-blue-900 font-semibold px-2">
                            PT. DEWATA ANGKASA
                        </p>
                        <p class="md:text-sm text-xs font-roboto text-blue-800 px-2">
                            Metro Trade Centre Kav. G-18, Jln. Soekarno-Hatta
                        </p>
                    </div>
                @endfor



            </div>
        </div>
    </div>

    </div>


    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
