@extends('layout')
@section('content')
    @if($employees->isEmpty())
        <p>employees not registered yet</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">SurName</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody >
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->surname}}</td>
                    <td>
                        <form action="{{route('employee.edit', $employee->id)}}">
{{--                        <a href="{{route('employee.edit', $employee->id)}}">Edit</a>--}}
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </form>
                        <form action="{{route('employee.hire', $employee->id)}}">
                        @if($employee->is_hired==1)
{{--                            <a href="{{route('employee.hire', $employee->id)}}">Hired</a>--}}
                                <button class="btn btn-primary" type="submit">Hired</button>
                        @else
{{--                            <a href="{{route('employee.hire', $employee->id)}}">Not Hired</a>--}}
                                <button class="btn btn-primary" type="submit">Not hired</button>
                        @endif
                        </form>
                        <form action="{{route('delete', $employee->id)}}">
                        @method('DELETE')
{{--                        <a href="{{route('delete', $employee->id)}}">Delete</a>--}}
                            <button class="btn btn-primary" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            {{$employees->links()}}
        </table>
    @endif
@endsection
