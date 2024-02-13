@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Student') }}</div>

                <div class="card-body">
                    <div class="container">
                        <h2 class="mt-5 mb-4 text-center">Update Form</h2>
                        <form action="{{route('student.update',$id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="roll">Roll:</label>
                                <input type="text" class="form-control" id="roll" name="roll" value="{{$student->roll}}" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" id="age" name="age" value="{{$student->age}}" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select class="form-control" id="gender" selected="{{$student->gender}}" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{$student->phone}}" required>
                            </div>
                            <div class="form-group">
                                <label for="district">District:</label>
                                <input type="text" class="form-control" id="district" name="district" value="{{$student->district}}" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection