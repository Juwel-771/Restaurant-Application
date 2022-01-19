@extends('layout')
@section('content')
    <h2>Add Resturant</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="/add" method="POST">
                    @csrf
                    <label for="name" class="form-label">Restaurant Name: </label>
                    <input type="text" name="name" class="form-control" placeholder="Restaurant Name"><br>
                    <label for="email" class="form-label">Restaurant Email: </label>
                    <input type="email" name="email" class="form-control" placeholder="Email"><br>
                    <label for="address" class="form-label"></label>
                    <label for="email" class="form-label">Restaurant Address: </label>
                    <input type="text" name="address" class="form-control" placeholder="Address"><br>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection