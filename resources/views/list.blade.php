@extends('layout')

@section('content')
<div class="container ">
    @if (Session::get('status'))
        <h1>List of Restaurant</h1>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{(Session::get('status'))}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Eamil</th>
        <th scope="col">Adress</th>
        <th scope="col">Operations</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->addres}}</td>
                <td><a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td>
                <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection