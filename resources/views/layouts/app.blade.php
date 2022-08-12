<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">5 Livewire Projects For Beginners</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/counter" class="nav-link {{ request()->routeIs('counter') ? 'active' : '' }}">Counter</a></li>
                <li class="nav-item"><a href="/calculator" class="nav-link {{ request()->routeIs('calculator') ? 'active' : '' }}">Calculator</a></li>
                <li class="nav-item"><a href="/todo-list" class="nav-link {{ request()->routeIs('todo-list') ? 'active' : '' }}">Todo List</a></li>
                <li class="nav-item"><a href="/cascading-dropdown" class="nav-link {{ request()->routeIs('cascading-dropdown') ? 'active' : '' }}">Cascading Dropdown</a></li>
                <li class="nav-item"><a href="/products" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">Product Search</a></li>
                <li class="nav-item"><a href="/image-upload" class="nav-link {{ request()->routeIs('image-upload') ? 'active' : '' }}">Image Upload</a></li>
                <li class="nav-item"><a href="/register" class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}">Register</a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>
