@extends('layouts.app')
@section('title', 'All Roles')
@section('content')

<div style="max-width: 600px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Roles List</h2>
        <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Add New Role
        </a>
    </div>

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th style="width: 70px;">ID</th>
                <th>Name</th>
                <th style="width: 240px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-warning" title="Edit">
                        <i class="fa fa-pencil"></i> Edit
                    </a>
                    <a href="{{ route('roles.permissions.edit', $role->id) }}" class="btn btn-sm btn-primary" title="Assign Permissions">
                        <i class="fa fa-lock"></i> Assign Permissions
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No roles found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection