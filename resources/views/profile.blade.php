@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="/uploads/profile/{{$user->image}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right: 25px;"/>
            <h2>{{$user->name}}'s Profile</h2>
            <form action="/profile" method="POST" enctype="multipart/form-data">
                <label>Update Your Profile</label></br>
                
                <input type="file" name="dp">
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">

                        <label>NAME</label>
                        
                        <input type="text" placeholder="Enter Name" name="name" value="{{$user->name}}" class="form-control" id="name">
                    </div>
                    
                    <div class="form-group">
                        <label>EMAIL-ID</label>
                        <input type="email" placeholder="Enter EMAIL-ID" id="email" name="email" class="form-control" value="{{$user->email}}" >
                    </div>
</div>
</div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" value="Update" class="pull-right btn btn-sm btn-primary">
             </form>   
        </div>
    </div>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#hackIt').on('click', function(){
$('input[type=file]').trigger('click');
});
</script>