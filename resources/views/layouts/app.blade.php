<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Laravel Role Permission Module')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container mt-4">
        <a href="{{ url('/') }}" class="btn btn-outline-secondary mb-3">← Go to Welcome Page</a>

        <a href="{{ route('clear.cache') }}" class="btn btn-outline-secondary mb-3">
            Cache Clear
        </a>
        <h2 class="mb-4">@yield('heading')</h2>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif


        @yield('content')
    </div>
</body>

</html>