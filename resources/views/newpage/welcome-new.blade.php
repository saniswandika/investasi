@extends('layouts.frontendnew')

@section('content')
    <div class="w-full mx-auto relative md:h-700 h-400">
        <img src="{{ url('img/home-page/' . $homePage->bannerImage) }}" alt="Image" class="w-full h-full object-cover">

        <div class="absolute bottom-20 left-0 w-4/5 lg:w-1/2 bg-green-800 bg-opacity-75 rounded-r-lg">
            <div class="flex flex-col justify-start gap-4 px-4 py-8 sm:px-8 lg:py-16 lg:px-16 lg:pr-24">
                <h1 class="lg:text-4xl text-white font-bold font-roboto">{{ $homePage->title }}</h1>
                <div>
                    <p class="text-white md:text-lg text-sm font-roboto">
                        {{ $homePage->bannerText }}
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="w-4/5 mx-auto md:mt-32 mt-10 mb-20">
        <div class="grid md:grid-cols-2 p-4 md:gap-32 gap-6">
            <div class="flex flex-col md:pt-10 pt-4 gap-4 justify-center">
                <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tight text-blue-800">
                    Why Invest in the West Java ?
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-10 h-1 bg-hijau">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>
                <p class="md:text-lg text-sm font-roboto text-blue-800">
                    West Java offers world-class talent, high investment and a robust, business-friendly
                    environment to
                    reliably expand, trade and invest.
                </p>
                <div>
                    <button class="bg-hijau text-white text-xl px-4 py-2 rounded-2xl font-semibold font-roboto">
                        <a href="{{ route('front.whyinvest.v2') }}">
                            Discover More
                        </a>
                    </button>
                </div>
            </div>
            <div class="w-full md:h-400 h-300 py-4 order-first md:order-last">
                <img src="{{ url('img/home-page/' . $homePage->whyInvestImage) }}" alt="Image"
                    class="w-full h-full object-cover rounded-2xl ">

            </div>
        </div>
    </div>
    <div class="w-4/5 mx-auto md:my-10 my-4">
        <div class="grid md:grid-cols-2 p-4 md:gap-32 gap-6">

            <div class="w-full md:h-400 h-300 py-4 ">
                <img src="{{ url('img/home-page/' . $homePage->sectorImage) }}" alt="Image"
                    class="w-full h-full object-cover rounded-2xl ">

            </div>
            <div class="flex flex-col md:pt-10 pt-4 gap-4 justify-center">
                <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tight text-blue-800">
                    West Java Sector
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-10 h-1 bg-hijau">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>
                <p class="text-lg font-roboto text-blue-800">
                    West Java Investment Atlas showcases all sectors and opportunities across West Java.
                </p>
                <div>
                    <button class="bg-hijau text-white text-xl px-4 py-2 rounded-2xl font-semibold font-roboto">
                        <a href="{{ route('front.sector.v2') }}">
                            Discover More
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-4/5 mx-auto pt-10">
        <div class="grid md:grid-cols-2 p-4 md:gap-32">
            <div class="flex flex-col pt-10 gap-4 justify-center">
                <p class="text-4xl md:text-5xl font-bold font-roboto tracking-tight text-blue-800">
                    West Java Region
                </p>
                <div class="flex">
                    <hr class="border border-hijau w-10 h-1 bg-hijau">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>
                <p class="text-lg font-roboto text-blue-800">
                    The economic power and diversity of West Java regions offer global businesses one of the best ecosystems
                    in the world to grow innovative companies.
                </p>
                <div>
                    <button class="bg-hijau text-white text-xl px-4 py-2 rounded-2xl font-semibold font-roboto">
                        <a href="{{ route('front.region.v2') }}">
                            Discover More
                        </a>
                    </button>
                </div>
            </div>
            <div class="w-full md:h-600 h-300 py-4 md:order-last order-first">
                <img src="{{ url('img/home-page/' . $homePage->findInvestImage) }}" alt="Image"
                    class="w-full h-full object-contain rounded-2xl ">

            </div>
        </div>
    </div>
    <div class="w-full mx-auto py-10 bg-hijau ">
        <div class="w-4/5 mx-auto grid md:grid-cols-2 p-4 gap-20">
            <div class="flex flex-col pt-10 gap-4">
                <p class="text-5xl font-bold text-white">
                    Find your investment opportunities
                </p>
                <div class="flex">
                    <hr class="border border-biru w-10 h-1 bg-biru">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>
                <p class="text-lg text-white">
                    We have selected a range of attractive large capital and foreign direct investment opportunities to meet
                    your needs.
                </p>
                <div>
                    <button class="bg-yellow-500 text-white text-xl px-4 py-2 rounded-2xl font-semibold">
                        <a href="{{ route('front.investment.v2') }}">
                            Discover More
                        </a>
                    </button>
                </div>
            </div>
            <div class="w-full h-400 py-4 hidden md:flex">
                <img src="{{ url('img/section5.png') }}" alt="Image" class="w-full h-full object-cover rounded-2xl ">

            </div>
        </div>
    </div>

    <div class="w-4/5 mx-auto md:pt-32 pt-10 ">
        <div class="flex gap-4 flex-col">
            <p class="md:text-5xl text-3xl font-bold block font-roboto text-blue-800">
                Economy Indicator
            </p>
            <div class="flex">
                <hr class="border border-hijau w-10 h-1 bg-hijau">
                <hr class="border border-kuning w-10 h-1 bg-kuning">
            </div>

        </div>

    </div>

    <div class="md:w-4/5 w-full md:mx-auto p-4 mb-20">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-8 justify-center">
            <div class="flex border-hijau border-4 rounded-lg md:py-10 md:px-10 justify-center md:col-span-9">
                <canvas id="myChart"></canvas>

            </div>
            <div class="flex flex-col md:justify-between gap-4 md:gap-0 md:col-span-3 col-span-1">
                <div class="flex items-center gap-5 border-4 border-hijau rounded-lg py-10 pl-6">
                    <div class="flex flex-col gap-2">
                        <p class="text-blue-600 font-bold md:text-2xl text-xl">
                            Inflasi/Inflation
                        </p>
                        <p class="text-blue-800 md:text-2xl text-xl font-bold">
                            {{ $stats->inflation }}
                        </p>
                        {{-- <p class="text-blue-600 font-bold text-xl">
                            ({{ $stats->inflationDate->format('M Y') }})
                        </p>
                        <p class="text-black text-sm">
                            {{ $stats->updated_at->format('d M Y') }}
                        </p> --}}
                    </div>

                </div>
                <div class="flex items-center gap-5 border-4 border-hijau rounded-lg py-10 pl-6">
                    <div class="flex flex-col gap-2">
                        <p class="text-blue-600 font-bold md:text-2xl text-xl">
                            LPE/Economic Growth
                        </p>
                        {{-- <p class="text-blue-600 font-bold text-xl">
                            ({{ $stats->economicGrowthDate->format('M Y') }})
                        </p>
                        <p class="text-black text-sm">
                            {{ $stats->updated_at->format('d M Y') }}
                        </p> --}}
                        <p class="text-blue-800 md:text-2xl text-xl font-bold">
                            {{ $stats->economicGrowth }}
                        </p>
                    </div>

                </div>
                <div class="flex items-center gap-5 border-4 border-hijau rounded-lg py-10 pl-6">
                    <div class="flex flex-col gap-2">
                        <p class="text-blue-600 font-bold md:text-2xl text-xl">
                            West Java Export
                        </p>
                        {{-- <p class="text-blue-600 font-bold text-xl">
                            ({{ $stats->westJavaExportDate->format('M Y') }})
                        </p>
                        <p class="text-black text-sm">
                            {{ $stats->updated_at->format('d M Y') }}
                        </p> --}}
                        <p class="text-blue-800 md:text-2xl text-xl font-bold">
                            {{ $stats->westJavaExport }}
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="w-full mx-auto md:pt-10 py-4 bg-hijau ">
        <div class="w-4/5 mx-auto grid md:grid-cols-2 p-4 gap-16">
            <div class="flex flex-col md:py-10 gap-4 justify-center">
                <p class="text-5xl font-bold text-white font-roboto tracking-tighter">
                    How we can help
                </p>
                <div class="flex">
                    <hr class="border border-biru w-10 h-1 bg-biru">
                    <hr class="border border-kuning w-10 h-1 bg-kuning">
                </div>
                <p class="text-lg text-white font-roboto">
                    Our international network provides a global reach in 170 countries. Staff work to ensure global
                    businesses can invest successfully in the West Java, whether directly in creating a West Java entity or
                    indirectly investing capital in a West Java business or development.
                </p>
                <div>
                    <button class="bg-yellow-500 text-white text-xl px-4 py-2 rounded-2xl font-semibold font-roboto">
                        Discover More
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-start border-l-8 border-kuning">
                <div class="w-200 h-200 py-4 ml-10">
                    <img src="{{ url('img/LogoBIPutih.png') }}" alt="Image"
                        class="w-full h-full object-contain rounded-2xl ">

                </div>
                <div class="w-200 h-200 py-4 ml-10">
                    <img src="{{ url('img/LogoPMPTSP.png') }}" alt="Image"
                        class="w-full h-full object-contain rounded-2xl ">

                </div>
            </div>
        </div>
    </div>

    @include('newpage.footer')

    @include('newpage.copyright')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($date),
                    datasets: [{
                        data: @json($value),
                        fill: false,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        pointStyle: 'circle',
                        pointRadius: 10,
                        pointHoverRadius: 15
                    }]
                },
                options: {
                    scales: {

                        y: {
                            suggestedMin: 15000,
                            suggestedMax: 16000,
                            stepSize: 100,
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltips: {
                            callbacks: {
                                title: function(tooltipItem, data) {
                                    // Display the date as the title
                                    return data.labels[tooltipItem[0].index];
                                },
                                label: function(tooltipItem, data) {
                                    // Display "rate usd" as the label
                                    return "rate usd: " + tooltipItem.formattedValue;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@stop
