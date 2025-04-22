@extends('layouts.frontendnew')

@section('content')
    <div class="w-full bg-white md:mt-10 mt-20">
        <div class="w-4/5 mx-auto">

            <div class="flex flex-col gap-4">
                <p class="text-blue-800 md:text-5xl text-3xl font-bold">
                    {{ $agenda->title }}
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-20 h-2 bg-hijau">
                    <hr class="border border-kuning w-20 h-2 bg-kuning">
                </div>
            </div>

            <div class="md:grid-cols-3 grid-cols-1 grid mt-10 gap-8">
                <div class="md:col-span-2">
                    <div class="w-full md:h-500 h-300">
                        <img src="{{ url('img/agenda/' . $agenda->image) }}" alt="" class="object-cover h-full w-full">
                    </div>
                </div>
                <div></div>
            </div>

            <div class="text-justify md:my-10 my-2">
                {!! $agenda->content !!}
            </div>
        </div>

    </div>
    </div>

    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
