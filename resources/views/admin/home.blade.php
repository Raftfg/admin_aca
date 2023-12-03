@extends('admin.layouts.master')

@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
 

        <div class="row col-lg-12 col-md-12 ">

        </div>

        <div class="row col-lg-12 col-md-12 ">
            <!-- 1st row Start -->

            <div class="col-lg-12">
                <div class="row col-md-12">

                    <div class="col-md-3">
                        <div class="card  mb-4 bg-pattern-2-dark">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="lnr lnr-user display-4 text-primary"></div>
                                    <div class="ml-3">
                                        <div class="small">
                                            <h6>Total utilisateurs <br> <br> </h6>
                                        </div>
                                        <div class="text-large">{{ $totalUser }}</div>
                                    </div>
                                </div>

                                <div id="" class="mt-3 " style="height:40px"><a href="{{ route('admin/users') }}">En savoir +</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 bg-pattern-2-dark">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <!-- <div class="lnr lnr-warning display-4 text-primary"></div> -->
                                    <div class="ion ion-ios-people display-4 text-primary"></div>

                                    <!-- <i class=" ion ion-ios-people"></i> -->
                                    <div class="ml-3">
                                        <div class=" small">
                                            <h6>Total des importateurs <br> <br> </h6>
                                        </div>
                                        <div class="text-large">{{ $totalImpoter }}</div>
                                    </div>
                                </div>

                                <div id="" class="mt-3 " style="height:40px"><a href="{{ route('admin/importers') }}"> En savoir + </a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-4 bg-pattern-2-dark">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="lnr lnr-car display-4 text-primary"></div>
                                    <div class="ml-3">
                                        <div class=" small">
                                            <h6>Total des véhicules <br> <br> </h6>
                                        </div>
                                        <div class="text-large">{{ $totalVehicle }}</div>
                                    </div>
                                </div>

                                <div id="" class="mt-3 " style="height:40px"><a href="{{ route('admin/vehicules') }}"> En savoir + </a></div>
                            </div>
                        </div>
                    </div>

            
                    <div class="col-md-3">
                        <div class="card mb-4 bg-pattern-2-dark">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="lnr lnr-cog  display-4 text-primary"></div>
                                    
                                    <div class="ml-3">
                                        <div class="small">
                                            <h6>Total des marques <br> <br> </h6>
                                        </div>
                                        <div class="text-large">{{ $totalBrand }}</div>
                                    </div>
                                </div>

                                <div id="" class="mt-3 " style="height:40px"><a href="{{ route('admin/marques') }}"> En savoir + </a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 1st row Start -->
        </div>

    </div>
    <!-- [ content ] End -->

    <!-- [ Layout footer ] Start -->

    <!-- [ Layout footer ] End -->
</div>
<!-- [ Layout content ] Start -->
@endsection


@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>


@endsection