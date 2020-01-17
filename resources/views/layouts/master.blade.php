<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css">

    <title>@yield('titulo')</title>
  </head>

  <body>

    <div class="container">
        @component('componente_navbar', ["current" => $current])
        @endcomponent
        <main role="main">
            @hasSection('conteudo')
                @include('flash::message')
                @yield('conteudo')
            @endif
        </main>
    </div>




    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    @stack('js')

  </body>
</html>
