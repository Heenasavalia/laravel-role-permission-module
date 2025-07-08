@extends('layouts.app')

@section('title', isset($role) ? 'Edit Role' : 'Add New Role')

@section('content')
<div style="max-width: 500px;">
    <h3 class="mb-4">{{ isset($role) ? 'Edit Role' : 'Add New Role' }}</h3>

    <form action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}" method="POST">
        @csrf
        @if(isset($role))
        @method('PUT')
        @endif

        <div class="mb-3">
            <label for="name" class="mb-1">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $role->name ?? '') }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($role) ? 'Update' : 'Create' }}</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection