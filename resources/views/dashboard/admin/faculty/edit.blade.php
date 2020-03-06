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
                            <form action="{{route('faculty.update', $data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="company" class=" form-control-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$data->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="vat" class=" form-control-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Designation</label>
                                    <input type="text" name="designation" class="form-control" value="{{$data->designation}}">
                                </div>
                                <div class="form-group">
                                    <label for="country" class=" form-control-label">Programme</label>
                                    <input type="text" name="programme" class="form-control" value="{{$data->programme}}">
                                </div>
                                <div class="form-group">
                                    <label for="select" class=" form-control-label">Semester</label>
                                    <select name="semester" class="form-control">
                                        <option value="I" @if($data->semester == 'I')selected @endif>I</option>
                                        <option value="II" @if($data->semester == 'II')selected @endif>II</option>
                                        <option value="III" @if($data->semester == 'III')selected @endif>III</option>
                                        <option value="IV" @if($data->semester == 'IV')selected @endif>IV</option>
                                        <option value="V" @if($data->semester == 'V')selected @endif>V</option>
                                        <option value="VI" @if($data->semester == 'VI')selected @endif>VI</option>
                                        <option value="VII" @if($data->semester == 'VII')selected @endif>VII</option>
                                        <option value="VIII" @if($data->semester == 'VIII')selected @endif>VIII</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="country" class=" form-control-label">Mobile Number</label>
                                    <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" name="image" accept="image/*">
                                    <input type="hidden" name="image_url" value="{{$data->image}}">
                                    @if($data->image)
                                    <img src="{{asset($data->image)}}" height="50" width="50">
                                    @endif
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Update Faculty
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