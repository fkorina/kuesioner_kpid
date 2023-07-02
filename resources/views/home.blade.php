@extends('layouts.app')

@section('css_after')
@endsection

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
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Order Summary</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005" data-toggle="dropdown">
                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                aria-labelledby="dropdownMenuButton005">
                                <a class="dropdown-item" href="#">Year</a>
                                <a class="dropdown-item" href="#">Month</a>
                                <a class="dropdown-item" href="#">Week</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center mt-2">
                        <div class="d-flex align-items-center progress-order-left">
                            <div class="progress progress-round m-0 orange conversation-bar" data-percent="46">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value text-secondary">46%</div>
                            </div>
                            <div class="progress-value ml-3 pr-5 border-right">
                                <h5>$12,6598</h5>
                                <p class="mb-0">Average Orders</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ml-5 progress-order-right">
                            <div class="progress progress-round m-0 primary conversation-bar" data-percent="46">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value text-primary">46%</div>
                            </div>
                            <div class="progress-value ml-3">
                                <h5>$59,8478</h5>
                                <p class="mb-0">Top Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="layout1-chart-5"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
@endsection
