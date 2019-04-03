<!DOCTYPE Html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	@foreach(['danger','warning','success','info'] as $msg)
	@if(Session::has('alert-'.$msg))
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div id="errorAlert">
				<p class="alert alert-{{$msg}}">{{Session::get('alert-'.$msg)}}
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;
					</a>
			</p>
			</div>
		</div>
	</div>
	@endif
	@endforeach
	<form action="/emp" method="POST">
	{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Employee Details</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>NAME</label>
                    <input type="text" placeholder="Enter Name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}">
                    @if($errors->has('name'))
                                    <span class="alert alert-danger invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

					</div>
					<div class="form-group">
						<label>MOBILE</label>
                        <input type="text" placeholder="Enter Mobile Number" name="mobile" class="form-control {{ $errors->has('mobile') ? ' is-invalid' : '' }}" id="mobile" value="{{ old('mobile') }}">
                                            </div>
                                            @if ($errors->has('mobile'))
                                    <span class="alert alert-danger invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
					<div class="form-group">
						<label>EMAIL-ID</label>
                        <input type="email" placeholder="Enter EMAIL-ID" id="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                                    <span class="alert alert-danger invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

					</div>


				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<input type="submit"  name="save" value="SAVE" class="btn btn-success">
					</div>
				</div>
			</div>
		</div>
</form>
		<div class="container">
					<table class="table table-responsive" >
						<thead>
							<tr><th>NAME</th>
								<th>MOBILE</th>
								<th>EMAIL-ID</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody >
							@foreach($employees as $value)
							<tr>
								<td>{{$value['name']}}</td>
								<td>{{$value['mobile']}}</td>
								<td>{{$value['email']}}</td>
								<td><a href="/emp/{{$value['id']}}" class="btn btn-warning">UPDATE</a>
								<a href="/emp-delete/{{ $value['id'] }}" class="btn btn-danger">DELETE</a></td>
							@endforeach
						</tbody>
					</table>
				</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$("#errorAlert").hide(4000).slideUp(400);
</script>
