// rss-fetch.js
async function fetchRSS() {
  const response = await fetch('https://subsplease.org/rss/?t=rss'); // RSS feed link
  const xml = await response.text();
  const parser = new DOMParser();
  const xmlDoc = parser.parseFromString(xml, 'text/xml');
  const items = xmlDoc.querySelectorAll('item');

  const animeList = [];
  items.forEach(item => {
    animeList.push({
      title: item.querySelector('title').textContent,
      link: item.querySelector('link').textContent,
      pubDate: item.querySelector('pubDate').textContent,
      description: item.querySelector('description').textContent,
    });
  });

  return animeList;
}

fetchRSS().then(animeList => {
  const animeContainer = document.getElementById('anime-list');
  animeList.forEach(anime => {
    const animeElement = document.createElement('div');
    animeElement.classList.add('anime-item');
    animeElement.innerHTML = `
      <h3><a href="${anime.link}" target="_blank">${anime.title}</a></h3>
      <p>${anime.description}</p>
      <p><small>Published on: ${new Date(anime.pubDate).toLocaleDateString()}</small></p>
    `;
    animeContainer.appendChild(animeElement);
  });
});
