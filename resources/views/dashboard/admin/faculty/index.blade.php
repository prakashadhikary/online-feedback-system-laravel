@include('dashboard.admin.header')
@include('dashboard.admin.navbar')
<div class="page-container">
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-data__tool">
                            <div class="table-data__tool-right ml-auto">
                                <a href="{{route('faculty.create')}}" class="au-btn au-btn-icon au-btn--green text-light">
                                    <i class="zmdi zmdi-plus"></i>add faculty
                                </a>
                            </div>  
                        </div>
                        <div class="table-responsive table-responsive-data">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>s.n.</th>
                                        <th>image</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>designation</th>
                                        <th>programme</th>
                                        <th>semester</th>
                                        <th>phone</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $value)
                                    <tr class="tr-shadow">
                                        <td>{{$data->firstItem() + $key}}</td>
                                        <td>
                                            @if($value->image)
                                            <img src="{{asset($value->image)}}" height="100">
                                            @endif
                                        </td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->designation}}</td>
                                        <td>{{$value->programme}}</td>
                                        <td>{{$value->semester}}</td>
                                        <td>{{$value->phone}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{route('faculty.edit', $value->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form action="{{route('faculty.destroy', $value->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="item" data-placement="top" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure to delete?')"><i class="zmdi zmdi-delete"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                @if(class_basename($data) !== 'Collection')
                                {{$data->links()}}
                                @endif
                            </div>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.admin.footer')