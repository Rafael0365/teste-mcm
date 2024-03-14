<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadinho</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background-color: #4e8ccf; /* Azul mais claro */
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        footer {
            background-color: #4e8ccf; /* Azul mais claro */
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Mercadinho</h1>
    </header>
    <nav>
        <a href="{{ route('produto.lista') }}">Produtos</a>
        <a href="{{ route('register') }}">Cadastre-se</a>
        <a href="{{ route('login') }}">Login</a>
    </nav>
    <div class="container">
        <section id="sobre">
            <h2 class="welcome">Sobre Nós</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo lectus vel blandit mollis. Ut sit amet tincidunt mauris.</p>
        </section>
        <section id="contato">
            <h2 class="welcome">Contato</h2>
            <p>Entre em contato conosco através do telefone: (00) 1234-5678</p>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Mercadinho. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


