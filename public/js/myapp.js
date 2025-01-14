document.addEventListener("DOMContentLoaded", function() {
    if (window.location.pathname === '/fruits-list') {
        fetch('/api/fruits', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${window.rememberToken}`
            }
          }).then(response => response.json())
            .then(data => {
                const container = document.getElementById('fruits-container');
                if (container) {
                    data.forEach(fruit => {
                        const card = document.createElement('div');
                        card.classList.add('col-md-4');

                        // Construct the carousel if images exist
                        let carouselHtml = '';
                        if (fruit.images.length > 0) {
                            const carouselId = `carousel-${fruit.id}`;
                            carouselHtml = `
                                <div id="${carouselId}" class="carousel slide mb-3" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        ${fruit.images.map((image, index) => `
                                            <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                                <img src="${image}" class="d-block w-100" alt="${fruit.name}">
                                            </div>
                                        `).join('')}
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#${carouselId}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#${carouselId}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            `;
                        }

                        // Construct the card
                        card.innerHTML = `
                            <div class="card mb-4" data-id="${fruit.id}">
                                ${carouselHtml}
                                <div class="card-body">
                                    <h5 class="card-title">${fruit.name}</h5>
                                    <p class="card-text">${fruit.description || 'No description available.'}</p>
                                    <p class="card-text"><strong>Origin:</strong> ${fruit.origin}</p>
                                    <p class="card-text"><strong>Seasonality:</strong> ${fruit.seasonality}</p>
                                    <p class="card-text"><strong>Storage Place:</strong> ${fruit.storage_place}</p>
                                    <p class="card-text"><strong>Storage Period:</strong> ${fruit.storage_period}</p>
                                </div>
                            </div>
                        `;
                        container.appendChild(card);

                        const allCards = document.querySelectorAll(".card");
                            console.log(allCards);
                            allCards.forEach(function(card){
                                 card.addEventListener("click", function() {
                                    window.lastClickedFruit = card.getAttribute("data-id");
                                 })
                            });
                    });

                    // Initialize all carousels after they are added to the DOM
                    const carousels = document.querySelectorAll('.carousel');
                    carousels.forEach(carousel => {
                        new bootstrap.Carousel(carousel);
                    });
                }
            })
            .catch(error => console.error('Error fetching fruits:', error));
            const FruitButton = document.getElementById("showFruitButton");

            FruitButton.addEventListener("click", function() {
                let lastId = window.lastClickedFruit || 1;
                fetch(`/api/fruits/${lastId}`, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${window.rememberToken}`
                    }
                  }).then(response => {
                        const rsp = response.json();

                        return rsp;
                       
                  }
                    ).then(respObj => {
                        const modalTitle = document.getElementById("showOneFruitModalTitle");
                        const modalBody = document.getElementById("showOneFruitModalBody");
                        console.log(respObj);

                        modalTitle.innerText = respObj.name;
                        modalBody.innerHTML = `
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">Seasonality</div>
                                    <div class="col-6">${respObj.seasonality}</div>
                                </div>
                            </div>
                        `;
                            
                    });
                
             });

             
    }
    
});
