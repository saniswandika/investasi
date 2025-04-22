@extends('layouts.frontendnew')

@section('content')
    <div class="w-full h-300">

        <img src="{{ url('img/banner/'.$banner->image) }}" alt="" class="object-cover h-full w-full bg-center">
    </div>

    <div class="w-4/5 mx-auto">
        <div class="flex flex-col w-3/4 gap-2 mt-12">
            <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tighter text-blue-900">
                News
            </p>
            <div class="flex">
                <hr class="border border-hijau w-20 h-2 bg-biru">
                <hr class="border border-kuning w-20 h-2 bg-kuning">
            </div>

            <p class="text-lg font-roboto text-justify text-blue-900 mt-10">
                West Java has a mature, high-spending consumer market and an open, liberal economy, world-class talent
                and a business-friendly regulatory environment.

                Our language, legal system, funding environment, time zone and lack of red tape helps make the West Java
                one of the easiest markets to set-up, scale and grow a business.
            </p>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-2 gap-12 my-20">
            @foreach ($news->data as $item)
                <div class="flex flex-col gap-2">
                    <a href="{{ route('front.news.show.v2', ['slug' => $item->slug]) }}" >
                        <div class="w-full h-200">
                            <img src="{{ url('img/artikel/' . $item->image) }}" alt="Image"
                                class="w-full h-full object-cover ">

                        </div>
                        <p class="text-2xl font-roboto text-blue-900 font-semibold px-2">
                            {{ $item->judul }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-2 mt-10 justify-items-end items-center mb-8">
            <p class="font-roboto text-lg text-blue-800 font-semibold">Page {{ $news->current_page }} of
                {{ $news->last_page }}</p>
            <div>
                @if ($news->prev_page_url != null)
                    <a href="{{ $news->prev_page_url }}">
                        <button class="px-8 py-2 bg-black text-white font-roboto font-semibold">
                            Prev
                        </button>
                    </a>
                @endif
                <a href="{{ $news->next_page_url }}">
                    <button class="px-8 py-2 bg-black text-white font-roboto font-semibold">
                        Next
                    </button>
                </a>
            </div>
        </div>
    </div>

    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
