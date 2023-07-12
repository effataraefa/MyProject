@extends('backend.master')
@section('content')
    <div class="container mt-3">
        <h1>Category Table</h1>
        <a class="btn btn-success" href="{{ route('category.create') }}">Create</a>
        <div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                
            
              </tr>
            </thead>
            <tbody>
              @foreach ($category as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->image }}</td>
                    <td>
                      <a class="btn btn-success" href="">Edit</a>
                      <a class="btn btn-primary" href="">Update</a>
                      <a class="btn btn-danger" href="">Delete</a>
                    </td>




                </tr>

              
                @endforeach
            </tbody>
          </table>
            {{$category->links()}}
        </div>
    </div>
@endsection
