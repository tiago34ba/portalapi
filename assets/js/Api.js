document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('load-news'); // Não precisa de tipagem explícita
  
    button.addEventListener('click', () => {
      fetch('http://127.0.0.1:8000/noticias')
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json(); // Supondo que a resposta esteja em JSON
        })
        .then(data => { // Sem anotações de tipo
          console.log(data); // Processar os dados e exibir no DOM
          const newsSection = document.getElementById('news-section'); // Sem tipagem explícita
          newsSection.innerHTML = ''; // Limpa a seção de notícias
          data.forEach(noticia => {
            const article = document.createElement('article');
            article.innerHTML = `<h2>${noticia.titulo}</h2><p>${noticia.descricao}</p>`;
            newsSection.appendChild(article);
          });
        })
        .catch(error => {
          console.error('Houve um problema com a requisição Fetch:', error);
        });
    });
  });
  