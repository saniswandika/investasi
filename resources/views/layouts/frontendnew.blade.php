<!doctype html>
<html lang="en">

<head>
    <title>West Java Investment Partnership</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Icons -->
    <link href="{{ url('') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link
        href="{{ url('') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{ url('') }}/img/investasi-favicon.png" type="image/png">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree&display=swap" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145056801-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-145056801-1');
    </script> --}}

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XL19332NT0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-XL19332NT0');
    </script>


    @yield('top-content')
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 fixed top-0 w-full z-30">
        <div class="w-4/5 flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('front.home.v2') }}" class="flex items-center">
                <div class="md:w-40 md:h-20 h-10 w-20">
                    <img src="{{ url('img/home-page/logo_baru.png') }}" alt="Image"
                        class="w-full h-full object-contain">
                </div>

            </a>
            <button id="mobile-menu-toggle" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700  items-center">
                    <li>
                        <a href="{{ route('front.investment.v2') }}"
                            class="font-roboto font-semibold block py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            @lang('frontv2.menu.investInWestJava')
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.get.touch.v2') }}"
                            class="font-roboto font-semibold block py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">@lang('frontv2.menu.contact')
                        </a>
                    </li>

                    <div class="item-centers">
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="location = this.value;">
                            <option value="{{ route('setlanguage', ['key' => 'EN']) }}" @if (Lang::locale() === 'EN')
                            selected
                                    @endif
                            >
                                EN
                            </option>
                            <option
                                    value="{{ route('setlanguage', ['key' => 'id']) }}"
                                    @if (Lang::locale() === 'id')
                                    selected @endif>
                                ID
                            </option>
                        </select>
                    </div>

                    <button class="font-roboto
        py-3 px-6 bg-blue-700 rounded-lg font-semibold text-white">WJIS</button>
    </ul>
    </div>
    </div>
    </nav>
    <div class="hidden md:flex justify-end mt-32 mb-4 w-4/5 mx-auto px-4">
        <ul class="flex gap-10 font-semibold text-base">

            <li class="font-roboto text-blue-800 cursor-pointer">
                <a href="{{ route('front.presentation-book.v2') }}">@lang('frontv2.menu.presentationBook')</a>
            </li>
            <li class="font-roboto text-blue-800">
                <a href="{{ route('front.news.v2') }}">@lang('frontv2.menu.news')</a>
            </li>

        </ul>
    </div>
    <div id="mobile-menu" class="fixed top-6 right-4 z-50 bg-white rounded-lg p-4 hidden w-1/2">
        <ul class="space-y-4 text-sm ">
            <li>
                <a href="{{ route('front.investment.v2') }}"
                    class="font-roboto font-semibold block py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100">Why
                    invest in West Java</a>
            </li>
            <li>
                <a href="#"
                    class="block font-roboto font-semibold  py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100">Contact</a>
            </li>
            <li>
                <a href="{{ route('front.presentation-book.v2') }}"
                    class="block font-roboto font-semibold  py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100">Presentation
                    Book</a>
            </li>
            <li>
                <a href="#"
                    class="block font-roboto font-semibold  py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100">
                    News</a>
            </li>
            <li>
                <a href="#"
                    class="block font-roboto font-semibold  py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100">
                    About us</a>
            </li>
            <div class="flex">
                <select id="countries"
                    class="bg-gray-50 border border-blue-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-blue-800">
                    <option selected class="text-blue-700">ID</option>
                    <option value="US" class="text-blue-700">EN</option>
                </select>
            </div>


            <button class="font-roboto py-3 px-6 bg-blue-700 rounded-lg font-semibold text-white">WJIS</button>
        </ul>
    </div>


    <div>
        @yield('content')
    </div>

    <script>
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    </body>

</html>
