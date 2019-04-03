<!DOCTYPE Html>
<html>
<head>
	<title>Employee Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="/emp-update" method="POST">
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
						<input type="hidden" name='id' value="{{$employees['id']}}">
                    <input type="text"  name="name" value="{{$employees['name']}}" class="form-control {{$errors->has('name') ? 'is-invalid' :''}}" id="name">
                    </div>
                    @if($errors->has('name'))
                    <span class="alert alert-danger" role="alert">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                    @endif
					<div class="form-group">
						<label>MOBILE</label>
                    <input type="text"  name="mobile" class="form-control {{$errors->has('mobile') ? 'is-invalid':''}}" id="mobile" value="{{$employees['mobile']}}" >
                    </div>
                    @if($errors->has('mobile'))
                    <span class="alert alert-danger" role="alert">
                        <strong>{{$errors->first('mobile')}}</strong>
                    </span>
                    @endif
					<div class="form-group">
						<label>EMAIL-ID</label>
                    <input type="email" id="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' :''}}" value="{{$employees['email']}}" >
					</div>
                    @if($errors->has('email'))
                    <span class="alert alert-danger" role="alertdialog">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                    @endif

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<input type="submit"  name="save" value="UPDATE" class="btn btn-success">
					</div>
				</div>
			</div>
		</div>
</form>
