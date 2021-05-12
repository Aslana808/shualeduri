@extends('layout')
@section('content')
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div style="margin: 20px">
                <form action="{{route('employee.update', $employee->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" value="{{old('name', $employee->name)}}">
                        <small id="emailHelp" class="form-text text-muted">Name</small>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" name="surname" class="form-control" id="surname" aria-describedby="emailHelp" placeholder="Enter surname" value="{{old('surname', $employee->surname)}}">
                        <small id="emailHelp" class="form-text text-muted">surname</small>
                    </div>

                    <div class="form-group">
                        <label for="is_hired">Hire status</label>
                        <input type="text" name="author_name" class="form-control" id="is_hired" aria-describedby="emailHelp" placeholder="Hire status" value="{{old('is_hired', $employee->is_hired)}}">
                        <small id="emailHelp" class="form-text text-muted">is_hired</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
