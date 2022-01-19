@extends('layout')
@section('content')
    <h2>Restaurant Page</h2>
    @if (session()->has('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Restaourant Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                  <tr>
                    <th>{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection