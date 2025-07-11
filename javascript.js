fetch('articles.json')
  .then(response => response.json())
  .then(articles => {
    const container = document.getElementById('articles-container');
    articles.forEach(article => {
      const articleHTML = `
        <article>
          <h2><a href="${article.url}">${article.title}</a></h2>
          <p>${article.snippet}</p>
        </article>
      `;
      container.innerHTML += articleHTML;
    });
  })
  .catch(err => {
    console.error('Error loading articles:', err);
  });
