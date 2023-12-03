@extends('admin.layouts.master')
@section('content')
    <!-- ====================================
                        ——— CONTENT WRAPPER
                        ===================================== -->
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini">
                        <div class="card-header">
                            <h2>{{ $totalSales }} JD</h2>
                            <div class="sub-title">
                                <span class="mr-1">Sales of this year</span> |
                                <span class="mx-1">{{ $percentage }}%</span>
                                @if ($percentage > 0)
                                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                                @elseif($percentage < 0)
                                    <i class="mdi mdi-arrow-down-bold text-danger"></i>
                                @endif

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <div>
                                    <div id="spline-area-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini">
                        <div class="card-header">
                            <h2>14,500 JD</h2>
                            <div class="dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="sub-title">
                                <span class="mr-1">Expense of this year</span> |
                                <span class="mx-1">0%</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <div>
                                    <div id="spline-area-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini">
                        <div class="card-header">
                            <h2>4199 JD</h2>
                            <div class="dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="sub-title">
                                <span class="mr-1">Profit of this year</span> |
                                <span class="mx-1">0%</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <div>
                                    <div id="spline-area-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card card-default card-mini">
                        <div class="card-header">
                            <h2>20,199 JD</h2>
                            <div class="dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="sub-title">
                                <span class="mr-1">Revenue of this year</span> |
                                <span class="mx-1">0%</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <div>
                                    <div id="spline-area-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-8">

                    <!-- Income and Express -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Income And Expenses</h2>
                            <div class="dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" data-display="static">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-wrapper">
                                <div id="mixed-chart-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!-- Current Users  -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h2>Current Users</h2>
                            <span>Realtime</span>
                        </div>
                        <div class="card-body">
                            <div id="barchartlg2"></div>
                        </div>
                        <div class="card-footer bg-white py-4">
                            <a href="#" class="text-uppercase">Current Users Overview</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
