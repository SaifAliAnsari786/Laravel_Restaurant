@extends('layout')

@section('content')
    <div class="container ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Eamil</th>
                    <th scope="col">Adress</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($resto as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->addres }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
