@extends('layouts.frontendnew')

@section('content')
    <div class="w-full h-300">

        <img src="{{ url('img/banner/'.$banner->image) }}" alt="" class="object-cover h-full w-full bg-center">
    </div>

    <div class="w-4/5 mx-auto pt-10">
        <div class="grid md:grid-cols-2 md:gap-32 gap-6">
            <div class="flex flex-col gap-8 items-start justify-start">
                <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tighter text-blue-900">
                    West Java Regions
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-20 h-2 bg-biru">
                    <hr class="border border-kuning w-20 h-2 bg-kuning">
                </div>

                <p class="text-lg font-roboto text-justify text-blue-900">
                    West Java has a mature, high-spending consumer market and an open, liberal economy, world-class talent
                    and a business-friendly regulatory environment.

                    Our language, legal system, funding environment, time zone and lack of red tape helps make the West Java
                    one of the easiest markets to set-up, scale and grow a business.
                </p>

            </div>
            <div class="w-full md:h-600 h-300 py-4 order-first md:order-last">
                <img src="{{ url('img/region/jabar.png') }}" alt="Image" class="w-full h-full object-cover rounded-2xl ">

            </div>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-2 gap-4 my-8">
            @foreach($region as $item)
            <div class="flex flex-col gap-2">
                <a href="{{ route('front.region.show.v2', ['slug' => $item->slug]) }}">
                    <div class="w-full h-200">
                        <img src="{{ url('img/profile/'.$item->image) }}" alt="Image" class="h-full object-cover ">

                    </div>
                    <p class="text-2xl font-roboto text-blue-900 font-semibold px-2">
                        {{ $item->name }}
                    </p>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
