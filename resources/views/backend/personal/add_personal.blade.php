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
                            <form method="post" action="{{ route('store.personal') }}" enctype="multipart/form-data">
                                @csrf
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Add Person
                                </h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="firstname" class="form-label">Full Name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="text" class="form-label">Mobile Number</label>
                                               <input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Your Phone Number">
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
                                                <label class="form-label d-block">Hobby</label>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="hobby[]" value="movie" id="movie">
                                                    <label class="form-check-label" for="movie">Movie</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="hobby[]" value="reading" id="reading">
                                                    <label class="form-check-label" for="reading">Reading</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="hobby[]" value="facebook" id="facebook">
                                                    <label class="form-check-label" for="facebook">Facebook</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="hobby[]" value="youtube" id="youtube">
                                                    <label class="form-check-label" for="youtube">Youtube</label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="present_address" class="form-label">Present Address</label>

                                                <textarea name="present_address" id="present_address" class="form-control" rows="3" placeholder="Enter Present address"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="permanent_address" class="form-label">Permanent Address</label>

                                                <textarea name="permanent_address" id="permanent_address" class="form-control" rows="3" placeholder="Enter permanent address"></textarea>
                                            </div>
                                        </div>

                                      <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="education" class="form-label">Education</label>
                                                <select name="education" id="education" class="form-select">
                                                    <option selected disabled>Select Degree </option>
                                                    <option value="ssc">S.Sc</option>
                                                    <option value="hsc">H.Sc</option>
                                                    <option value="bsc">B.Sc</option>
                                                    <option value="msc">M.Sc</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="start_time" class="form-label">Office Start Time</label>
                                                <input type="time" id="office_start_time" name="office_start_time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3 form-group">
                                                <label for="end_time" class="form-label">Office End Time</label>
                                                <input type="time" id="office_end_time" name="office_end_time" class="form-control">
                                            </div>
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
