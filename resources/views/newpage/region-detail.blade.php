@extends('layouts.frontendnew')

@section('content')
    <div class="w-full bg-white mt-10">
        <div class="w-4/5 mx-auto">

            <div class="flex flex-col gap-4">
                <p class="text-blue-800 text-5xl font-bold">
                    {{$region->name}}
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-20 h-2 bg-hijau">
                    <hr class="border border-kuning w-20 h-2 bg-kuning">
                </div>
            </div>

            <div class="md:grid-cols-3 grid-cols-1 grid mt-10 gap-8">
                <div class="md:col-span-2">
                    <div class="w-full md:h-500 h-300">
                        <img src="{{ url('img/profile/banner/'.$region->banner) }}" alt="" class="object-cover h-full w-full">
                    </div>
                </div>
                <div class="md:col-span-1">
                    <a href="{{ route('front.investment.v2') }}">
                        <div class="flex">
                                <button class="bg-hijau text-white text-lg font-roboto block flex-grow py-2">Investment
                                    Opportunities</button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="text-justify mt-10">
                {!! $region->desc !!}
            </div>


        </div>
        <div class="w-full bg-gray-white py-12 mt-10">
            <div class="w-4/5 mx-auto">
                <div class="flex flex-col gap-4">
                    <p class="text-blue-800 text-5xl font-bold">
                        Another Region
                    </p>
                    <div class="flex">
                        <hr class="border border-hijau w-20 h-2 bg-hijau">
                        <hr class="border border-kuning w-20 h-2 bg-kuning">
                    </div>
                </div>

                <div class="grid md:grid-cols-3 grid-cols-1 gap-6 mt-10">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-200">
                            <img src="{{ url('img/region/bandung.png') }}" alt="Image"
                                class="w-full h-full object-cover ">

                        </div>
                        <p class="text-2xl font-roboto text-blue-900 font-semibold px-2">
                            Bandung City
                        </p>
                        <p class="text-lg font-roboto text-blue-800 px-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-200">
                            <img src="{{ url('img/region/bogor.png') }}" alt="Image" class="w-full h-full object-cover ">

                        </div>
                        <p class="text-2xl font-roboto text-blue-900 font-semibold px-2">
                            Bogor Regency
                        </p>
                        <p class="text-lg font-roboto text-blue-800 px-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-200">
                            <img src="{{ url('img/region/skbumi.png') }}" alt="Image"
                                class="w-full h-full object-cover ">

                        </div>
                        <p class="text-2xl font-roboto text-blue-900 font-semibold px-2">
                            Sukabumi Regency
                        </p>
                        <p class="text-lg font-roboto text-blue-800 px-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
