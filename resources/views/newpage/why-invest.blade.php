@extends('layouts.frontendnew')

@section('content')
    <div class="w-full h-500">

        <img src="{{ url('img/why-invest/'.$whyInvest[0]->bannerImage) }}" alt="" class="object-cover h-full w-full bg-center">
    </div>

    <div class="w-4/5 mx-auto pt-10">
        <div class="grid md:grid-cols-2 md:gap-32 gap-6">
            <div class="flex flex-col gap-8 items-start justify-start">
                <p class="text-5xl md:text-6xl font-bold font-roboto tracking-tighter text-blue-900">
                    {{ $whyInvest[0]->highlight }}
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-20 h-2 bg-biru">
                    <hr class="border border-kuning w-20 h-2 bg-kuning">
                </div>
                <p class="text-3xl font-roboto text-blue-900 font-semibold">
                    {{ $whyInvest[0]->title }}
                </p>
                <p class="text-lg font-roboto text-justify text-blue-900">
                    {{ $whyInvest[0]->label }}
                </p>

            </div>
            <div class="w-full h-400 py-4 order-first md:order-last">
                <img src="{{ url('img/why-invest/'.$whyInvest[0]->imageSideBar) }}" alt="Image"
                    class="w-full h-full object-cover rounded-2xl ">

            </div>
        </div>

        <div class="grid grid-cols-4 mt-10">

            <div class="md:col-span-3 col-span-4">
                <p class="text-4xl md:text-6xl font-bold font-roboto tracking-tighter text-blue-900">
                    {{ $whyInvest[0]->titleTwo }}
                </p>
            </div>
        </div>


        <div class="grid md:grid-cols-2 grid-cols-1 my-10 gap-8">
            @foreach($whyInvest as $item)
                <div class="flex flex-col gap-4">
                    <p class="text-2xl font-roboto text-blue-900 font-semibold underline">
                        {{ $item->detailTitle }}
                    </p>
                    <p class="text-lg font-roboto text-blue-800 ">
                        {{ $item->detailLabel }}
                    </p>

                    <div class="w-full h-300">
                        <img src="{{ url('img/why-invest/'.$item->detailImage) }}" alt=""
                            class="object-cover h-full w-full bg-center">
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
