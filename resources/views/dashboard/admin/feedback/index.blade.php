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
                                <a href="{{route('feedback.create')}}" class="au-btn au-btn-icon au-btn--green text-light">
                                    <i class="zmdi zmdi-plus"></i>add feedback
                                </a>
                            </div>  
                        </div>
                        <div class="table-responsive table-responsive-data">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>s.n.</th>
                                        <th>name</th>
                                        <th style="float: right; margin-right: 40px">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $value)
                                    <tr class="tr-shadow">
                                        <td>{{$data->firstItem() + $key}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form action="" method="post" class="d-inline">
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