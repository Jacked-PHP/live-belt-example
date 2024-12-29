<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Hello Conveyor</h1>
        <livewire:live-belt
            :channel="'private-notifications-' . auth()->id()"
            callback="console.log"
        />

        <script>
            (function () {
                window.addEventListener('onConveyorMessage', (e) => {
                    console.log(e.detail);
                });
            })()
        </script>
    </body>
</html>
