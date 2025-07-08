@extends('layouts.app')

@section('content')
    <h2>Permissions List</h2>
    <a href="{{ route('permissions.create') }}" class="btn btn-primary mb-3">Add New Permission</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach($permissions as $permission)
        <tr>
            <td>{{ $permission->id }}</td>
            <td>{{ $permission->name }}</td>
            <td>
                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        @endforeach
    </table>
@endsection
