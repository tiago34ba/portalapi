<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal de Notícias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #news-section {
            margin-top: 20px;
        }

        article {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
        }

        /* Estilo para o botão de carregar notícias */
        button {
            margin-bottom: 20px;
        }

        /* Estilo para o texto de carregamento */
        #loading {
            font-style: italic;
            color: #777;
        }
    </style>
</head>
<body>

    <header>
        <h1>Portal de Notícias</h1>
        <nav>
            <ul>
                <!-- Link para o menu de notícias -->
                <li><a href="#news-section">Ir para Notícias</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <button id="load-news">Carregar Notícias</button>
            <div id="loading" style="display: none;">Carregando...</div>
        </section>

        <!-- Seção de notícias -->
        <section id="news-section">
            <h2>Últimas Notícias</h2>
            <!-- As notícias carregadas via Ajax aparecerão aqui -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Portal de Notícias</p>
    </footer>

    <script>
     document.addEventListener('DOMContentLoaded', function() {
  fetch('http://127.0.0.1:8000/noticias')
    .then(response => {
      if (!response.ok) {
        throw new Error('Erro na requisição: ' + response.status);
      }
      return response.json();
    })
    .then(data => {
      console.log(data);
    })
    .catch(error => {
      console.error('Erro:', error);
    });
});
    </script>

</body>
</html>
