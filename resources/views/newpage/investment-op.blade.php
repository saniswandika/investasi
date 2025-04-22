@extends('layouts.frontendnew')

@section('content')


    <div class="bg-gray-200 w-full mt-4">

        <div class="w-4/5 mx-auto">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-4">

                <div class="col-span-1  md:my-20 mt-20 mb-2 p-4">
                    <div class="flex flex-col justify-center gap-4 bg-white p-4">
                        <p class="font-roboto font-bold text-4xl text-blue-800">
                            Investment Opportunities
                        </p>
                        <div class="flex gap-20 items-center">
                            <div class="radio-item">
                                <input type="radio" id="ritema" name="ritem" value="ropt1" checked>
                                <label for="ritema">List</label>
                            </div>

                            <div class="radio-item">
                                <input type="radio" id="ritemb" name="ritem" value="ropt2"
                                    data-link="{{ route('front.investment-map.v2') }}">
                                <label for="ritemb">Map</label>
                            </div>
                        </div>
                        <div class="mt-10">
                            <p class="font-robot text-2xl font-bold text-blue-800">
                                Choose investment type
                            </p>
                        </div>
                        <div class="flex flex-col justify-center">
                            <ul class="text-lg text-blue-800 font-roboto flex flex-col gap-4">
                                @foreach ($sector as $item)
                                    <a href="{{ url('/investment-opportunities?sector=') }}{{ $item->Id }}">
                                        <div class="flex items-center justify-between cursor-pointer">
                                            <li>{{ $item->title }}</li>
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 my-20 p-4">

                    <div class="flex justify-start mt-10">
                        <p class="font-robot text-lg text-blue-700">
                            {{ $investasi->total }} opportunities found
                        </p>
                    </div>
                    @foreach ($investasi->data as $item)
                        <div class="grid md:grid-cols-2 grid-cols-1 mt-10 bg-white p-4 gap-4">
                            <div class="h-40 w-full">
                                <img src="{{ url('invest/thumbnail/' . $item->image) }}" alt=""
                                    class="object-cover h-full w-full">
                            </div>
                            <div class="flex flex-col justify-evenly">
                                <p class="font-bold font-robot text-2xl text-blue-800">
                                    <a href="{{ route('front.inverstment.show.v2', ['id' => $item->invest_id]) }}">
                                        {{ $item->judul_investasi }} </a>
                                </p>
                                <p class="font-roboto text-blue-800">
                                    {{ $item->mini_deskripsi }}
                                </p>
                            </div>

                        </div>
                    @endforeach

                    <div class="grid grid-cols-2 mt-10 justify-items-end items-center">
                        <p class="font-roboto text-lg text-blue-800 font-semibold">Page {{ $investasi->current_page }} of
                            {{ $investasi->last_page }}</p>
                        <div>
                            @if ($investasi->prev_page_url != null)
                                <a href="{{ $investasi->prev_page_url }}">
                                    <button class="px-8 py-2 bg-black text-white font-roboto font-semibold">
                                        Prev
                                    </button>
                                </a>
                            @endif
                            <a href="{{ $investasi->next_page_url }}">
                                <button class="px-8 py-2 bg-black text-white font-roboto font-semibold">
                                    Next
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                if ($(this).is(':checked')) {
                    var link = $(this).data('link');
                    window.location.href = link;
                }
            });
        });
    </script>

    @include('newpage.speak-to-us')

    @include('newpage.footer')

    @include('newpage.copyright')
@stop
