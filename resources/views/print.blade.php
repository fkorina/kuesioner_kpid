<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIENDRA | KPID SUMSEL</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('desain/assets/images/logokpid.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('posdash/assets/css/backend-plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('posdash/assets/css/backend.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('posdash/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('posdash/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('posdash/assets/vendor/remixicon/fonts/remixicon.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @yield('css_after')
</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="content-page">
            <div class="container-fluid">
                {{-- Content --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title"> Grafik Responden</h4>
                                </div>
                                <button class="btn btn-primary" id="btn_print">Print</button>
                            </div>
                            <div class="card-body">
                                <div id="am-3dpie-chart" style="height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Content --}}
                <!-- Page end  -->
            </div>
        </div>
    </div>
    <!-- Wrapper End-->

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('posdash/assets/js/backend-bundle.min.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('posdash/assets/js/customizer.js') }}"></script>

    <script>
        $("#btn_print").click(function() {
            $("#btn_print").hide();
            window.print()
            const afterPrint = setTimeout(() => {
                window.close()
            }, 500);
        })
    </script>

    <script>
        (function(jQuery) {
            /*---------------------------------------------------------------------
            Am Charts
            -----------------------------------------------------------------------*/
            if (jQuery('#am-3dpie-chart').length) {
                am4core.ready(function() {
                    // Themes begin
                    // am4core.useTheme(am4themes_animated);
                    // Themes end

                    var chart = am4core.create("am-3dpie-chart", am4charts.PieChart3D);

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
                        am4core.color("#4788ff"), am4core.color("#37e6b0"), am4core.color(
                            "#ff4b4b"),
                        am4core.color("#fe721c"), am4core.color("#876cfe"), am4core.color(
                            "#01041b"),
                        am4core.color("#a85d32"), am4core.color("#e01b7e"), am4core.color(
                            "#02e6d3"),
                        am4core.color("#b342b3"), am4core.color("#fae100"), am4core.color(
                            "#02b2f2"),
                        am4core.color("#2c2e5c"), am4core.color("#96968f"), am4core.color(
                            "#f2024a"),
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
</body>

</html>
