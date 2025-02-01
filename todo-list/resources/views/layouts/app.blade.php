<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ifaDASH Todo List</title>
    @vite('resources/scss/app.scss')
</head>
<body>
    <header>
        <h1>Lovely ifaDASH Todo List</h1>
    </header>

    <main>
        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </main>
</body>
</html>
