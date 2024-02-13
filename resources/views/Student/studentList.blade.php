@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student List') }}</div>

                <div class="card-body">
                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Roll</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <th scope="row">{{ $student->name }}</th>
                                    <td>{{ $student->roll }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->district }}</td>
                                    <td>{{ $student->user->name }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('student.edit',$student->id)}}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('student.delete',$student->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                        <!-- <a class="btn btn-danger" href="{{route('student.delete',$student->id)}}">Delete</a> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection