@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5 card p-4 rounded">
                <h5 class="text-center">Add New Student</h5>
                <form action="{{route('student.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Student Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" value="{{old('name')}}">
                        @error('name')
                            <span class="text-small text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="score">Student Score</label>
                        <input type="number" name="score" id="score" class="form-control" min="0" max="100" step=".01" value="{{old('score')}}">
                        @error('score')
                            <span class="text-small text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
