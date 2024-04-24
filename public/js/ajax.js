/*

        ajax request to fetch the data from the json file
*/

let http = new XMLHttpRequest();

http.open('GET', 'news.json', true);

http.send();

http.onload = function () {

    if (this.readyState == 4 && this.status == 200) {

        let datos = JSON.parse(this.responseText);

        let news = document.querySelector('#news');
        news.innerHTML = '';

        for (let article of datos) {
            news.innerHTML += `
                <div class="noticias-json">
                    <h2 class="title">${article.title}</h2>
                    <h3 class="category">${article.Category}</h3>
                    <img src="${article.image}" alt="${article.image}">
                </div>
                `;

        }

        //document.querySelector('news.json').innerHTML = output;

    }

}
