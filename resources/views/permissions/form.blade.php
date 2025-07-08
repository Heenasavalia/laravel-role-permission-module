@extends('layouts.app')

@section('content')
    <h2>{{ isset($permission) ? 'Edit Permission' : 'Add New Permission' }}</h2>

    <form action="{{ isset($permission) ? route('permissions.update', $permission->id) : route('permissions.store') }}" method="POST">
        @csrf
        @if(isset($permission))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $permission->name ?? '') }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($permission) ? 'Update' : 'Create' }}</button>
        <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
