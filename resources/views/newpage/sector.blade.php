@extends('layouts.frontendnew')

@section('content')

    <div class="w-full h-400 mt-8">
        <img src="{{ url('img/banner/'.$banner->image) }}" alt="" class="object-cover w-full h-full">
    </div>

    <div class="w-4/5 my-20 mx-auto">
        <div class="flex flex-col gap-4 ">
            <p class="font-roboto text-5xl text-blue-700 font-bold">
                Sectors
            </p>
            <div class="flex">
                <hr class="border border-hijau w-20 h-2 bg-hijau">
                <hr class="border border-kuning w-20 h-2 bg-kuning">
            </div>
        </div>
        
           
            <div class="grid md:grid-cols-3 grid-cols-1 mt-10 gap-10">
                @foreach($sector as $item)
            <a href="{{ url('/investment-opportunities?sector=')}}{{$item->Id}}">
                <div class="flex flex-col gap-2 items-center ">

                    <img src="@if (empty($item->image))
                                    {{url('img/default-image.png')}}
                                    @else
                                    {{url('')}}/img/westJavaSectorManagement/thumbnail/{{$item->image}}
                                    @endif" alt="" class="object-cover h-300 w-full">
                    <p class="font-robot text-blue-800 font-bold md:text-4xl text-2xl px-6">
                        {{ $item->title }}
                    </p>
                    <p class="font-robot text-blue-700 text-lg px-6">
                        {{ $item->headline}}
                    </p>

                </div>
            </a>
             @endforeach
            </div>
   
      
    </div>

    @include('newpage.speak-to-us')

    @include('newpage.footer')
@stop
