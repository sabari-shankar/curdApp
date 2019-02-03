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
						<input type="text" placeholder="Enter Name" name="name" value="{{$employees['name']}}" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label>MOBILE</label>
						<input type="text" placeholder="Enter Mobile Number" name="mobile" class="form-control" id="mobile" value="{{$employees['mobile']}}" >
					</div>
					<div class="form-group">
						<label>EMAIL-ID</label>
						<input type="email" placeholder="Enter EMAIL-ID" id="email" name="email" class="form-control" value="{{$employees['email']}}" >
					</div>
							
				
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