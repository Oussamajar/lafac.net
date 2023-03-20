<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lafac.Net | Home</title>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    @vite(['resources/css/app.css'])
    @livewireStyles
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <x-menu/>
            <x-aside-left/>
            <div class="content-wrapper">
                <div class="content">
                    <div class="container-fluid">
                        @yield("contenu")
                    </div>
                </div>
            </div>
            <x-aside-right/>
            <x-footer/>
        </div>
        @vite(['resources/js/app.js'])
        @livewireScripts
    </body>
</html>
