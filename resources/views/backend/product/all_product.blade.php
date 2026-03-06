@extends('admin.admin_dashboard')
@section('admin')

<div class="content">
    <div class="container-fluid">

        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex justify-content-between align-items-center">
                    <h4 class="page-title">All Product</h4>
                    <a href="{{ route('add.product') }}" 
                       class="btn btn-primary rounded-pill waves-effect waves-light">
                        Add Product
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="basic-datatable" 
                                   class="table table-bordered table-striped table-hover nowrap w-100">

                                <thead class="table-dark">
                                    <tr>
                                        <th>Sl</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Buying Price</th>
                                        <th>Selling Price</th>
                                        <th>Stock</th>
                                        <th>Unit</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th width="160px">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($products as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            <!-- Image Safe Check -->
                                            <td>
                                                @if(!empty($item->image))
                                                    <img src="{{ asset($item->image) }}" 
                                                         style="width:60px; height:50px; object-fit:cover;">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>

                                            <td>{{ \Illuminate\Support\Str::limit($item->name, 20) }}</td>

                                            <!-- Category Safe Check -->
                                            <td>
                                                {{ $item->category->name ?? 'No Category' }}
                                            </td>

                                            <td>৳ {{ number_format($item->buying_price, 2) }}</td>
                                            <td>৳ {{ number_format($item->selling_price, 2) }}</td>

                                            <td>
                                                    {{ $item->stock }}
                                            </td>

                                            <td>{{ $item->unit }}</td>

                                            <td>
                                                {{ \Illuminate\Support\Str::limit($item->description, 40) }}
                                            </td>

                                            <td>
                                                @if($item->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('edit.product', $item->id) }}"
                                                   class="btn btn-sm btn-primary">
                                                    Edit
                                                </a>

                                                <a href="{{ route('product.delete', $item->id) }}"
                                                   class="btn btn-danger btn-sm"
                                                   id="delete">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="11" class="text-center text-muted">
                                                No Products Found
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection