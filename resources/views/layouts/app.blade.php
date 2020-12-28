<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

    <link href="{{ asset('images/favi-icon.png') }}" rel="icon">


    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    {{-- {<script>tinymce.init({selector:'textarea'});</script>} --}}
</head>
<body>

    @include('includes.navbar')
    <div class="container m-2">
        @include('includes.messages')
        @yield('content')
    </div>
    <div id="footer" class="text-center bg-danger p-3 text-white">
        <p>Copyright &copy; <script>
            var now=new Date();
            document.write(now.getFullYear());
            </script> Ryan Mwakio </p>
    </div>
</body>
</html>
