@extends('layouts.app')

@section('content')
    <h2>Assign Role to {{ $user->name }}</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control" required>
                <option value="">Select Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                        {{ $role->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Assign Role</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
