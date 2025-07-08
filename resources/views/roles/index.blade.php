@extends('layouts.app')

@section('content')
<h2>Roles List</h2>
<a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Add New Role</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach($roles as $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ route('roles.permissions.edit', $role->id) }}" class="btn btn-sm btn-primary">Assign Permissions</a>
        </td>
        @endforeach
</table>
@endsection