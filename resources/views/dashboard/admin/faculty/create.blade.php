@include('dashboard.admin.header')
@include('dashboard.admin.navbar')
<!-- MAIN CONTENT-->
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
							<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Faculty Form</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('faculty.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Designation</label>
                                            <input type="text" name="designation" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Programme</label>
                                            <input type="text" name="programme" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                    <label for="select" class=" form-control-label">Semester</label>
                                                
                                                    <select name="semester" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="">I</option>
                                                        <option value="II">II</option>
                                                        <option value="III">III</option>
                                                        <option value="IV">IV</option>
                                                        <option value="V">V</option>
                                                        <option value="VI">VI</option>
                                                        <option value="VII">VII</option>
                                                        <option value="VIII">VIII</option>
                                                    </select>
                                            </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Mobile Number</label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Image</label>
                                            <input type="file" name="image" accept="image/*">
                                        </div>
                                        <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Add New Faculty
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('dashboard.admin.footer')