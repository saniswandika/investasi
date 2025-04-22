@extends('layouts.frontendnew')

@section('content')
    <div class="w-full bg-gray-100">
        <div class="w-full h-350"><img src="{{ url('img/banner/'.$banner->image) }}" alt=""
                class="object-cover h-full w-full bg-center"></div>


        <div class="w-4/5 mx-auto">
            <div class="flex flex-col w-3/4 gap-2 mt-12 bg-gray-100">
                <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tighter text-blue-900 bg-gray-100">
                    Event
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


                @foreach($agenda as $item)
                    <div class="flex flex-col gap-2 bg-white">
                        <a href="{{ route('front.event.show.v2', ['slug' => $item->slug]) }}" >
                            <div class="w-full md:h-200 h-100">
                                <img src="{{ url('img/agenda/thumbnail/'.$item->image) }}" alt="Image" class="w-full h-full object-cover ">

                            </div>
                            <p class="md:text-xl text-lg font-roboto text-blue-900 font-semibold px-2">
                                {{ $item->title }}
                            </p>
                            <div class="flex items-center justify-center mt-5">
                                <p class="md:text-lg text-base font-roboto text-blue-800 px-2">
                                    View Details
                                </p>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                @endforeach



            </div>
        </div>
    </div>

    </div>


    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
