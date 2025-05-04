<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    
<div class="flex justify-end items-center gap-4 mb-6">
        <div>
            <p class="text-sm text-gray-600 font-semibold">
                {{ auth()->user()->name }}
            </p>
        </div>

        <a href="{{ route('user.info.edit') }}" class="text-blue-600 hover:underline text-sm">
            Modificar información
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-600 hover:underline text-sm">
                Cerrar sesión
            </button>
        </form>
    </div>
    @yield('content')
</body>
</html>