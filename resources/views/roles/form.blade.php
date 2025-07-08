@extends('layouts.app')

@section('content')
    <h2>{{ isset($role) ? 'Edit Role' : 'Add New Role' }}</h2>

    <form action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}" method="POST">
        @csrf
        @if(isset($role))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $role->name ?? '') }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($role) ? 'Update' : 'Create' }}</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
