@include('dashboard.admin.header')
@include('dashboard.admin.navbar')

<div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
							<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Feedback Form</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('feedback.store')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Add Feedbacks</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Save
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