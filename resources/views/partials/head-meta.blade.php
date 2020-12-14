<meta charset="utf-8"/>

@if (Route::is('index'))
    <title>Todo App</title>
@else
    <title>@yield('page-title', config('app.name')) | Todo App</title>
@endif

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Todo App" name="description"/>
<meta content="Panji Setya Nur Prawira" name="author"/>
<meta content="{{ csrf_token() }}" name="csrf-token">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<link rel="shortcut icon" href="/favicon.ico">

@stack('meta')
