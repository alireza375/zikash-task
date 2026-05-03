@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Person</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <!-- end timeline content-->
                        <div class="tab-pane" id="settings">
                            <!--  -->
                            <form method="post" action="#" enctype="multipart/form-data">
                                @csrf
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Add Person
                                </h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="number" class="form-label">Mobile Number</label>
                                                <input type="number" name="mobile_number" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label class="form-label d-block">Gender</label>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="male" id="male">
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="female" id="female">
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" value="other" id="other">
                                                    <label class="form-check-label" for="other">Other</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="dob" class="form-label">Date Of Birth</label>

                                                <input type="date" name="date_of_birth" id="dob" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="hobby" class="form-label">Hobby</label>
                                                <input type="multiselect" step="0.01" min="0" name="hobby" class="form-control">
                                                 <select name="unit" class="form-select">
                                                    <option selected disabled>Select Unit </option>
                                                    <option value="kg">Kilogram (kg)</option>
                                                    <option value="gm">Gram (gm)</option>
                                                    <option value="pcs">Pieces (pcs)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Selling Price (৳)</label>
                                                <input type="number" step="0.01" min="0" name="selling_price" class="form-control" placeholder="Enter product Selling Price">
                                            </div>
                                        </div>

                                      <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="product_details" class="form-label">Product Details</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter product details"></textarea>
                                        </div>
                                    </div>


                                    
                                <div class="text-end">
                                    <button type="submit" class="mt-2 btn btn-success waves-effect waves-light"><i
                                            class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->


@endsection
