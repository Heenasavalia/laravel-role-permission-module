@extends('layouts.app')
@section('title', 'All Permission')
@section('content')

<div style="max-width: 600px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Permissions List</h2>
        <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Add New Permission
        </a>
    </div>

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th style="width: 70px;">ID</th>
                <th>Name</th>
                <th style="width: 200px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                    <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-warning" title="Edit">
                        <i class="fa fa-pencil"></i> Edit
                    </a>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No permissions found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection