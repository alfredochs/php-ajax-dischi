console.log("script importato");

const dischiContainer = document.getElementById("dischiContainer");
axios.get("http://localhost:8888/php-dischi/api/dischi.php").then((resp => {
    const dati = resp.data.listaDischi;
    dati.forEach((disco) => {
        const card = `<div class="col">
        <div class="card">
            <img src="${disco.poster}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">${disco.title}</h5>
                <p class="card-text">${disco.author}</p>
                <p class="card-text">${disco.year}</p>
            </div>
        </div>
    </div>`;
    
    dischiContainer.innerHTML += card;
      });
    }))