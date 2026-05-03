@extends('admin.admin_dashboard')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="m-0 breadcrumb">
                            <a href="{{ route('add.personal') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add person </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Person</h4>
                </div>
            </div>

        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-3">personal List</h4>

                        <div class="table-responsive">

                            <table class="table table-bordered table-striped align-middle">

                                <thead class="table-dark">
                                    <tr>
                                        <th>Sl</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Gender</th>
                                        <th>Present Address</th>
                                        <th>Education</th>
                                        <th>Office Start Time</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                        <td>1</td>
                                        <td>Ali Reza</td>
                                        <td>ali@gmail.com</td>
                                        <td>01623000000</td>
                                        <td>Male</td>
                                        <td>Mirpur-2, Dhaka</td>
                                        <td>B.Sc</td>
                                        <td>01 May, 2026</td>

                                        <td>
                                        <a href="#"
                                            class="btn btn-green rounded-pill waves-effect waves-light"
                                            id="view">View</a>

                                        <a href="#"
                                            class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>

                                        <a href="#"
                                            class="btn btn-danger rounded-pill waves-effect waves-light"
                                            id="delete">Delete</a>
                                    </td>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->


@endsection
