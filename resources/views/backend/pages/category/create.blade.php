@extends('backend.master')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div>
            <p class="alert alert-danger">{{$error}}</p>
    
        </div>
        @endforeach
    @endif
            <div class="container">
                <h1>
                    Category List
                </h1>
                @if (session()->has('msg'))
                    <p class="btn btn-success">{{ session()->get('msg') }}</p>
                @endif


                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control" id="" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" id=""
                            placeholder="Description">
                    </div>
        
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" name="status" class="form-control" id="" placeholder="Status">
        </div>

        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control" id="" placeholder="Image">
        </div>

        <br> <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    @endsection
