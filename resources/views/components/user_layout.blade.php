<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
</head>
<body>
    <header>
        <h1>This is the Layout Header User</h1>
    </header>

    <main>
    {{ $slot }}
        
        {{-- {{ $slot }} --}}
        {{-- @yield('main') --}}
    </main>

 
</body>
</html>
