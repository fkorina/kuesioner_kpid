@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-transparent card-block card-stretch card-height border-none">
                <div class="card-body p-0 mt-lg-2 mt-0">
                    <h3 class="mb-3">Hi {{ Auth::user()->name }}, <br> Selamat Datang Kembali</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">

                                <div>
                                    <p class="mb-2">Total Kuesioner</p>
                                    <h4>{{ $totalQuestionnaire }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div>
                                    <p class="mb-2">Total Responden</p>
                                    <h4>{{ $totalRespondent }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">

                                <div>
                                    <p class="mb-2">Total Pengguna</p>
                                    <h4>{{ $totalUser }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"> Grafik Responden</h4>
                    </div>
                    <a target="_blank" href="{{ route('print') }}" class="btn btn-primary">Print</a>
                </div>
                <div class="card-body">
                    <div id="am-3dpie-chart" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        (function(jQuery) {
            "use strict";
            // for am chart
            function amChartUpdate(chart, detail) {
                // let color = getComputedStyle(document.documentElement).getPropertyValue('--dark');
                if (detail.dark) {
                    // color = getComputedStyle(document.documentElement).getPropertyValue('--white');
                    chart.stroke = am4core.color(getComputedStyle(document.documentElement).getPropertyValue(
                        '--white'));
                }
                chart.validateData();
            }

            /*---------------------------------------------------------------------
            Am Charts
            -----------------------------------------------------------------------*/
            if (jQuery('#am-3dpie-chart').length) {
                am4core.ready(function() {
                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    var chart = am4core.create("am-3dpie-chart", am4charts.PieChart3D);
                    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

                    chart.legend = new am4charts.Legend();

                    chart.data = [{
                            country: "Palembang",
                            litres: @json($palembang),
                        },
                        {
                            country: "Banyuasin",
                            litres: @json($banyuasin),
                        },
                        {
                            country: "Empat Lawang",
                            litres: @json($empat_lawang),
                        },
                        {
                            country: "Lahat",
                            litres: @json($lahat),
                        },
                        {
                            country: "Lubuk Linggau",
                            litres: @json($lubuk_linggau),
                        },
                        {
                            country: "Muara Enim",
                            litres: @json($muara_enim),
                        },
                        {
                            country: "Musi Rawas",
                            litres: @json($musi_rawas),
                        },
                        {
                            country: "Musi Rawas Utara",
                            litres: @json($musi_rawas_utara),
                        },
                        {
                            country: "Ogan Ilir",
                            litres: @json($ogan_ilir),
                        },
                        {
                            country: "Ogan Komering Ilir",
                            litres: @json($ogan_komering_ilir),
                        },
                        {
                            country: "Ogan Komering Ulu",
                            litres: @json($ogan_komering_ulu),
                        },
                        {
                            country: "Ogan Komering Ulu Selatan",
                            litres: @json($ogan_komering_ulu_selatan),
                        },
                        {
                            country: "Ogan Komering Ulu Timur",
                            litres: @json($ogan_komering_ulu_timur),
                        },
                        {
                            country: "Pagar Alam",
                            litres: @json($pagar_alam),
                        },
                        {
                            country: "Pali",
                            litres: @json($pali),
                        },
                        {
                            country: "Prabumulih",
                            litres: @json($prabumulih),
                        },
                        {
                            country: "Musi Banyuasin",
                            litres: @json($musi_banyuasin),
                        },
                    ];

                    var series = chart.series.push(new am4charts.PieSeries3D());
                    series.colors.list = [
                        am4core.color("#4788ff"), am4core.color("#37e6b0"), am4core.color("#ff4b4b"),
                        am4core.color("#fe721c"), am4core.color("#876cfe"), am4core.color("#01041b"),
                        am4core.color("#a85d32"), am4core.color("#e01b7e"), am4core.color("#02e6d3"),
                        am4core.color("#b342b3"), am4core.color("#fae100"), am4core.color("#02b2f2"),
                        am4core.color("#2c2e5c"), am4core.color("#96968f"), am4core.color("#f2024a"),
                        am4core.color("#f5c4cb"), am4core.color("#e67002"),
                    ];
                    series.dataFields.value = "litres";
                    series.dataFields.category = "country";

                    const body = document.querySelector('body')
                    if (body.classList.contains('dark')) {
                        amChartUpdate(chart, {
                            dark: true
                        })
                    }

                    document.addEventListener('ChangeColorMode', function(e) {
                        amChartUpdate(chart, e.detail)
                    })

                }); // end am4core.ready()
            }
        })(jQuery);
    </script>
@endsection
