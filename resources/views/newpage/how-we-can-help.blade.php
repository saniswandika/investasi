@extends('layouts.frontendnew')

@section('content')
    <div class="w-full md:pt-10 py-4 bg-white ">
        <div class="w-4/5 mx-auto grid md:grid-cols-2 p-4 gap-16 bg-white">
            <div class="flex flex-col md:py-10 gap-4 justify-center">
                <p class="text-5xl font-bold text-blue-800 font-roboto tracking-tighter">
                    How we can help
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-10 h-1 bg-hijau">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>
                <p class="text-2xl text-blue-800 font-roboto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <p class="text-lg ext-blue-800 font-roboto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>

            </div>
            <div class="flex flex-col items-start border-l-8 border-kuning">
                <div class="w-200 h-200 py-4 ml-10">
                    <img src="{{ url('img/how-help/bi.png') }}" alt="Image"
                        class="w-full h-full object-contain rounded-2xl ">

                </div>
                <div class="w-200 h-200 py-4 ml-10">
                    <img src="{{ url('img/how-help/ptsp.png') }}" alt="Image"
                        class="w-full h-full object-contain rounded-2xl ">

                </div>
            </div>
        </div>

    </div>
    <div class="w-full md:pt-10 py-4 bg-gray-400 ">
        <div class="w-4/5 mx-auto grid md:grid-cols-3 p-4 gap-16 ">
            <div class="flex flex-col md:py-10 gap-4 justify-center md:col-span-2">
                <p class="md:text-5xl text-3xl font-bold text-blue-800 font-roboto tracking-tighter">
                    Our services for investors
                </p>
                <p class="text-lg text-blue-800 font-roboto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
                <p class="text-2xl text-blue-800 font-roboto font-bold">
                    The Office for Investment
                </p>
                <p class="text-lg text-blue-800 font-roboto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.
                </p>
                <div>
                    <button class="bg-hijau text-white text-xl px-4 py-2 rounded-lg font-semibold">
                        <a href="{{ route('front.investment.v2') }}">
                            Find out more
                        </a>
                    </button>
                </div>
            </div>

        </div>

    </div>

    <div class="w-full md:pt-10 py-4 bg-biru ">
        <div class="w-4/5 mx-auto grid md:grid-cols-2 p-4 gap-16 ">
            <div class="flex flex-col md:py-10 gap-4 justify-center">
                <p class="text-5xl font-bold text-white font-roboto tracking-tighter">
                    Find West Java Sectors
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-10 h-1 bg-hijau">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>

                <p class="text-lg text-white font-roboto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
                <div>
                    <button class="bg-hijau text-white text-xl px-4 py-2 rounded-lg font-semibold">
                        <a href="{{ route('front.sector.v2') }}">
                            Find West Java Sectos
                        </a>
                    </button>
                </div>
            </div>
            <div class="md:flex items-center hidden">
                <div class="w-full h-350">
                    <img src="{{ url('img/how-help/frame-2.png') }}" alt="Image" class="w-full h-full object-cover ">

                </div>

            </div>
        </div>

    </div>
    <div class="w-full md:pt-10 py-4 bg-gray-400 ">
        <div class="w-4/5 mx-auto grid md:grid-cols-2 p-4 gap-16 ">
            <div class="flex flex-col md:py-10 gap-4 justify-center">
                <p class="text-5xl font-bold text-blue-800 font-roboto tracking-tighter">
                    About us
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-10 h-1 bg-hijau">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>

                <p class="text-lg text-blue-800 font-roboto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.
                </p>
                <div>
                    <button class="bg-hijau text-white text-xl px-4 py-2 rounded-lg font-semibold">
                        <a href="{{ route('front.sector.v2') }}">
                            About us
                        </a>
                    </button>
                </div>
            </div>
            <div class="md:flex items-center hidden">
                <div class="w-full h-350">
                    <img src="{{ url('img/how-help/frame-3.png') }}" alt="Image" class="w-full h-full object-cover ">

                </div>

            </div>
        </div>

    </div>
    @include('newpage.speak-to-us')

    @include('newpage.footer')

    @include('newpage.copyright')
@endsection
