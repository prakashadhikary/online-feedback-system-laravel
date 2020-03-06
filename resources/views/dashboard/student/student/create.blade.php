[[@include('dashboard.student.header')
@include('dashboard.student.navbar')

<div class="page-container">
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="card-body">
							<button type="button" class="btn btn-primary m-l-10 m-b-10">
								<span class="badge badge-light">5</span> Strongly Agree
							</button>
							<button type="button" class="btn btn-success m-l-10 m-b-10">
								<span class="badge badge-light">4</span> Agree
							</button>
							<button type="button" class="btn btn-info m-l-10 m-b-10">
								<span class="badge badge-light">3</span> Neutral
							</button>
							<button type="button" class="btn btn-warning m-l-10 m-b-10">
								<span class="badge badge-light">2</span> Disagree
							</button>
							<button type="button" class="btn btn-danger m-l-10 m-b-10">
								<span class="badge badge-light">1</span> Strongly Disagree
							</button>

						</div>
						<div class="card">
							<form action="{{route('studentfeedback.store')}}" method="post">
								@csrf
								<div class="card-header">
									<strong>Feedback Form</strong>
									<div class="float-right">
										<select name="fid">
											<option value="0">Select Faculty</option>
											@foreach ($faculty as $fac)
											<option value="{{$fac->id}}">{{$fac->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="card-body card-block">
									<?php $i = 0; ?>
									@foreach($data as $value)
									<div class="form-group">
										<label>{{$value->name}}</label><div></div>
										<input type="hidden" name="answer[{{$i}}]" value="{{$value->id}}">
										<input type="radio" name="rating[{{$i}}]" value="5"> 5
										<input type="radio" name="rating[{{$i}}]" value="4"> 4
										<input type="radio" name="rating[{{$i}}]" value="3"> 3
										<input type="radio" name="rating[{{$i}}]" value="2"> 2
										<input type="radio" name="rating[{{$i}}]" value="1"> 1
									</div>
									<?php $i++; ?>
									@endforeach
									<input type="hidden" name="noOfRows" value="{{$i}}">
									<div class="form-group">
										<label>Is there anything you would like to tell?</label>
										<textarea name="shortDescription" class="form-control"></textarea>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary btn-sm">
											<i class="fa fa-dot-circle-o"></i> Send Feedback
										</button>
										<button type="reset" class="btn btn-danger btn-sm">
											<i class="fa fa-ban"></i> Reset
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@include('dashboard.student.footer')]]