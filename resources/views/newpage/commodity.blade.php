@extends('layouts.frontendnew')

@section('content')
    <div class="w-full h-300">

        <img src="{{ url('img/banner/'.$banner->image) }}" alt="" class="object-cover h-full w-full bg-center">
    </div>

    <div class="w-4/5 mx-auto">
        <div class="flex flex-col w-3/4 gap-2 mt-12">
            <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tighter text-blue-900">
                Commodity
            </p>
            <div class="flex">
                <hr class="border border-hijau w-20 h-2 bg-biru">
                <hr class="border border-kuning w-20 h-2 bg-kuning">
            </div>

          
        </div>
        <div class="grid md:grid-cols-4 grid-cols-2 gap-12 py-20 bg-gray-100">


            @foreach($comodities as $item)
                <div class="flex flex-col gap-2 bg-white px-4">
                    <div class="w-full h-200">
                        <img src="{{ url('img/commodities/thumbnail/'.$item->image) }}" alt="Image" class="w-full h-full object-cover ">

                    </div>
                    <p class="md:text-xl text-lg font-roboto text-blue-900 font-semibold px-2">
                        {{ $item->name }}
                    </p>

                    <div class="grid grid-cols-2">
                        <div class="flex flex-col gap-4">
                            <p class="md:text-sm text-xs font-roboto text-blue-800 px-2">
                                Plantation Area
                            </p>
                            <p class="md:text-sm text-xs font-roboto text-blue-800 px-2 font-bold">
                                {{ $item->plant_area }}
                            </p>
                            <p class="md:text-sm text-xs font-roboto text-blue-800 px-2">
                                Thousand Ha
                            </p>
                        </div>
                        <div class="flex flex-col gap-4">
                            <p class="md:text-sm text-xs font-roboto text-blue-800 px-2">
                                Production
                            </p>
                            <p class="md:text-sm text-xs font-roboto text-blue-800 px-2 font-bold">
                                {{ $item->production }}
                            </p>
                            <p class="md:text-sm text-xs font-roboto text-blue-800 px-2">
                                Thousand Ton/Year
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach



        </div>
    </div>

    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
