@extends('layouts.frontendnew')

@section('content')
    <div class="w-full bg-white md:mt-10 mt-20">
        <div class="w-4/5 mx-auto">

            <div class="flex flex-col gap-4">
                <p class="text-blue-800 md:text-5xl text-3xl font-bold">
                    {{ $publikasi->judul }}
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-20 h-2 bg-hijau">
                    <hr class="border border-kuning w-20 h-2 bg-kuning">
                </div>
            </div>

            <div class="text-justify md:my-10 my-2">
                {!! $publikasi->deskripsi !!}
            </div>

            <div class="flex justify-start items-center mb-10">
                @if ($publikasi->file != null)
                    <a href="{{ url('pub/file/' . $publikasi->file) }}" target="_blank">
                        <button class="font-roboto py-3 px-6 bg-blue-700 rounded-lg font-semibold text-white">Download</button>
                    </a>
                @endif
            </div>


        </div>

    </div>
    </div>

    @include('newpage.speak-to-us')

    @include('newpage.footer')
@endsection
