@extends('backend.master')

@section('content')
    <div class="container">
        <h1>
            Product List
        </h1>
        <form action="{{ route('product.list') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" class="form-control" id="" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control" id="" placeholder="Description">
            </div>

            <br> <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
