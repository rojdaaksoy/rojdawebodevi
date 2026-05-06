const API_KEY = 'e71e02491eea72eaa8e3d5cfcfbf846d'; 

const filmIdleri = [
    557,    // Spider-Man
    19995,  // Avatar
    157350, // Divergent
    157336, // Interstellar
    27205,  // Inception
    335984, // Blade Runner 2049
    49047,  // Gravity
    286217, // The Martian
    438631, // Dune
    11,     // Star Wars
    687163, // Project Hail Mary
    1124,   // The Prestige
    137113, // Edge of Tomorrow
    300668, // Annihilation
    405774, // Bird Box
    6479,   // I Am Legend
    505948, // I Am Mother
    198663, // The Maze Runner
    24428,  // The Avengers
    603     // The Matrix
];

async function filmleriGetir() {
    const container = document.getElementById('film-alani');
    if(!container) return;
    container.innerHTML = ''; 

    for (const id of filmIdleri) {
        try {
            // API'den veri çekme 
            const response = await fetch(`https://api.themoviedb.org/3/movie/${id}?api_key=${API_KEY}&language=tr-TR`);
            const film = await response.json();

            // Bootstrap Kart Yapısı
            const kart = `
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="https://www.themoviedb.org/movie/${film.id}" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="card h-100 bg-secondary text-white shadow border-0">
                            <img src="https://image.tmdb.org/t/p/w500${film.poster_path}" 
                                 class="card-img-top" 
                                 alt="${film.title}"
                                 style="height: 380px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h6 class="card-title text-warning">${film.title}</h6>
                                <p class="card-text" style="font-size: 13px;">
                                    <b>Puan:</b> ${film.vote_average.toFixed(1)} <br>
                                    <b>Yıl:</b> ${film.release_date.split('-')[0]}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            `;
            container.innerHTML += kart;
        } catch (error) {
            console.log(id + " ID'li film yüklenemedi.");
        }
    }
}

filmleriGetir();