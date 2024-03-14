<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <div class="text-center border-bottom"  style="overflow: auto;"><h1>Mercadinho MCM</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button 
                    onclick="event.preventDefault();
                    this.closest('form').submit();" 
                    class="btn btn-danger"
                    style="float: right;"
                >Sair</button>
                
            </form>
        </div>


        <div class="container">@yield('conteudo')</div>
       
    </body>
</html>