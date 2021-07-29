<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Manuel Auth Example</title>  
</head>
<body>
    <div>
        Nav is Here
    </div>
    <div>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#" onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</a>
                </form>
            </li>
        </ul>
    </div>
    <div>
        {{ $slot }}
    </div>
</body>
</html>