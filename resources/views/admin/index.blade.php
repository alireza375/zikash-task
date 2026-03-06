@extends('admin.admin_dashboard')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">

                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="text-white fa-sharp fa-solid fa-person-chalkboard font-22 avatar-title"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="mt-1 text-dark">
                                        <span data-plugin="counterup">
                                            {{ $productCount }}
                                        </span>
                                    </h3>
                                    <p class="mb-1 text-muted text-truncate">Total Products </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="text-white fa-sharp fa-solid fa-list font-22 avatar-title"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="mt-1 text-dark">
                                        <span data-plugin="counterup">
                                            {{ $categoryCount }}
                                        </span>
                                    </h3>
                                    <p class="mb-1 text-muted text-truncate">Total Categories </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div> <!-- end row-->

        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="text-white fa-sharp fa-solid fa-boxes font-22 avatar-title"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="mt-1 text-dark">
                                        <span data-plugin="counterup">
                                            {{ $totalStock }}
                                        </span>
                                    </h3>
                                    <p class="mb-1 text-muted text-truncate">Total Stock Quantity </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div>

             <div class="col-md-6 col-xl-6">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="text-white fa-sharp fa-solid fa-money-bill-wave font-22 avatar-title"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="mt-1 text-dark">
                                       ৳ <span data-plugin="counterup">
                                            {{ round($totalStockValue, 2) }}
                                        </span>
                                    </h3>
                                    <p class="mb-1 text-muted text-truncate">Total Stock Value </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div>
        </div> <!-- end row-->
    </div>
    <!-- end row -->
</div> <!-- content -->
@endsection
