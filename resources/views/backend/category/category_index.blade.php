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
                            <a href="{{ route('add.category') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Category </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Category</h4>
                </div>
            </div>

        </div>
        <!-- end page title -->

        {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($item->description, 40) }}</td>
                                    <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href=" {{ route('edit.category',$item->id) }}"
                                            class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>

                                        <a href="{{ route('category.delete',$item->id) }}"
                                            class="btn btn-danger rounded-pill waves-effect waves-light"
                                            id="delete">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-2">
                            {{ $categories->links('pagination::bootstrap-5') }}
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-3">Category List</h4>

                        <div class="table-responsive">

                            <table class="table table-bordered table-striped align-middle">

                                <thead class="table-dark">
                                    <tr>
                                        <th>Sl</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($categories as $key => $item)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($item->description, 40) }}</td>
                                        <td>
                                            @if($item->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.category',$item->id) }}"
                                            class="btn btn-primary btn-sm">
                                                Edit
                                            </a>

                                            <a href="{{ route('category.delete',$item->id) }}"
                                            class="btn btn-danger btn-sm"
                                            id="delete">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $categories->links('pagination::bootstrap-5') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->


@endsection
