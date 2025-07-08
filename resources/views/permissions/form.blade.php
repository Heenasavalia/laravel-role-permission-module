@extends('layouts.app')

@section('title', isset($permission) ? 'Edit Permission' : 'Add New Permission')

@section('content')
<div style="max-width: 500px;">
    <h3 class="mb-4">{{ isset($permission) ? 'Edit Permission' : 'Add New Permission' }}</h3>

    <form action="{{ isset($permission) ? route('permissions.update', $permission->id) : route('permissions.store') }}" method="POST">
        @csrf
        @if(isset($permission))
        @method('PUT')
        @endif

        <div class="mb-3">
            <label for="name" class="mb-1">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $permission->name ?? '') }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($permission) ? 'Update' : 'Create' }}</button>
        <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection