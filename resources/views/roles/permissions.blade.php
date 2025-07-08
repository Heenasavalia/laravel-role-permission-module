@extends('layouts.app')

@section('content')
    <h2>Assign Permissions to Role: {{ $role->name }}</h2>

    <form action="{{ route('roles.permissions.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            @foreach($permissions as $permission)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                        {{ in_array($permission->name, $rolePermissions) ? 'checked' : '' }}>
                    <label class="form-check-label">
                        {{ $permission->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Assign Permissions</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
