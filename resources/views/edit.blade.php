@extends('layout')
@section('content')
    <h2>Add Resturant</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="name" class="form-label">Restaurant ID: </label>
                    <input type="text" name="name" class="form-control" value="{{$data->id}}" placeholder="Restaurant ID"><br>
                    <label for="name" class="form-label">Restaurant Name: </label>
                    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Restaurant Name"><br>
                    <label for="email" class="form-label">Restaurant Email: </label>
                    <input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="Email"><br>
                    <label for="address" class="form-label"></label>
                    <label for="email" class="form-label">Restaurant Address: </label>
                    <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Address"><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection