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

                            <table class="table table-bordered table-striped align-middle mb-0">

                                <thead class="table-dark">
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        <th>Education</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                      

                                      
                                <tbody>
                                    @foreach($personals as $key=> $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile_number }}</td>
                                        <td> {{ $item->gender == 'male' ? 'Male' : ($item->gender == 'female' ? 'Female' : 'Other') }}</td>
                                        <td>{{ $item->education == 'ssc' ? 'SSC' : ($item->education == 'hsc' ? 'HSC' : ($item->education == 'bsc' ? 'BSc' : 'MSC')) }}</td>
                                        <td>{{ $item->office_start_time->format('h:i A') }}</td>
                                        <td>{{ $item->office_end_time->format('h:i A') }}</td>
                                        
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a href="#" class="btn btn-secondary btn-sm" title="View">
                                                    <i class="bi bi-eye"></i>
                                                </a>

                                                <a href="#" class="btn btn-primary btn-sm" title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <a href="#" class="btn btn-danger btn-sm" title="Delete">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach

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
