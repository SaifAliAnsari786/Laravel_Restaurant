@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class='container'>
        <h1>Edit Restaurant</h1>
        <form  method="POST" action="{{asset('/edit')}}">
          @csrf
          @method("PUT")
        <div class="form-group col-md-6">
          <label>Name</label>
          <input type="hidden" name="id"value="{{$data->id}}">

          <input type="text" name="name" class="form-control" value="{{$data->name}}"  placeholder="Enter Name">
        </div>
        <div class="form-group col-md-6">
          <label>Email</label>
          <input type="email" name="email" class="form-control" value="{{$data->email}}"  placeholder="Enter Email">
        </div>
        <div class="form-group col-md-6">
          <label>Addres</label>
          <input type="text" name="addres" class="form-control" value="{{$data->addres}}" placeholder="Enter Addres">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
</body>
</html>
    
@endsection