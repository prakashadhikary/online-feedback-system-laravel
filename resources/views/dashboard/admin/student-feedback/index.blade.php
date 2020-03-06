@include('dashboard.admin.header')
@include('dashboard.admin.navbar')
<div class="page-container">
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table-responsive-data">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>s.n.</th>
                                        <th>Student Name</th>
                                        <th>Teacher Name</th>
                                        @foreach($data as $value)
                                        <th>{{$value->feedback->name}}</th>
                                        @endforeach
                                        <th>description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John</td>
                                        <td>{{$value->faculty->name}}</td>
                                        @foreach ($data as $value)
                                        <td>{{$value->rating}}</td>
                                        @endforeach
                                        <td>{{$value->shortDescription}}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.admin.footer')