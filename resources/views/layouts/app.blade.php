<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- IMPORTANT!!! remember CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- sweetalert cdn -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {!! htmlScriptTagJsApi() !!}
    @livewireStyles
    <title>آسان آموز برنامه نویسی</title>
</head>

<body dir="rtl">
    <livewire:header />

    {{ $slot }}

    <livewire:footer />

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/grid.js') }}"></script>
    @livewireScripts

    <!-- Livewire Turbolinks/Turbo Plugin -->
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>

    <!-- livewire sweetalert -->
    <script>
        window.addEventListener('livewire:load', function() {
            livewire.on('sweet-alert', (icon, title, position = 'top-end',showConfirmButton = false, timer = 2500) => {
                Swal.fire({
                    position: position,
                    icon: icon,
                    title: title,
                    showConfirmButton: showConfirmButton,
                    timer: timer
                });
            });
        });
    </script>
</body>

</html>
