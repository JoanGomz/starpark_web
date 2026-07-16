<section class="novedades">
    <h2>Novedades</h2>

    <div id="instagram-feed" class="instagram-feed">
        <p class="instagram-loading">Cargando novedades...</p>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', async () => {
    const container = document.getElementById('instagram-feed');

    try {
        const response = await fetch('/instagram_feed.php', {
            headers: {
                Accept: 'application/json'
            },
            cache: 'no-store'
        });

        if (!response.ok) {
            throw new Error('No fue posible consultar Instagram.');
        }

        const payload = await response.json();
        const reels = Array.isArray(payload.data) ? payload.data : [];

        if (reels.length === 0) {
            container.innerHTML =
                '<p class="instagram-empty">Próximamente tendremos nuevas publicaciones.</p>';
            return;
        }

        container.innerHTML = reels.map((reel) => {
            const caption = escapeHtml(reel.caption || 'Ver Reel en Instagram');
            const permalink = encodeURI(reel.permalink || '#');
            const thumbnail = encodeURI(
                reel.thumbnail_url || reel.media_url || ''
            );

            return `
                <article class="instagram-card">
                    <a href="${permalink}"
                       target="_blank"
                       rel="noopener noreferrer">

                        <div class="instagram-thumbnail">
                            <img src="${thumbnail}"
                                 alt="${caption}"
                                 loading="lazy">

                            <span class="instagram-play">▶</span>
                        </div>

                        <p>${caption}</p>
                        <span class="instagram-link">Ver Reel en Instagram</span>
                    </a>
                </article>
            `;
        }).join('');
    } catch (error) {
        container.innerHTML =
            '<p class="instagram-error">No fue posible cargar las novedades.</p>';
    }
});

function escapeHtml(value) {
    const element = document.createElement('div');
    element.textContent = value;
    return element.innerHTML;
}
</script>

<style>
.novedades {
    padding: 30px;
    margin: 20px auto;
    max-width: 1200px;
}

.novedades h2 {
    text-align: center;
    margin-bottom: 30px;
}

.instagram-feed {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 24px;
}

.instagram-card {
    overflow: hidden;
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.instagram-card a {
    display: block;
    color: inherit;
    text-decoration: none;
}

.instagram-thumbnail {
    position: relative;
    aspect-ratio: 9 / 16;
    overflow: hidden;
    background: #111;
}

.instagram-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.instagram-card:hover img {
    transform: scale(1.04);
}

.instagram-play {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 58px;
    height: 58px;
    display: grid;
    place-items: center;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    color: #fff;
    background: rgba(0, 0, 0, 0.65);
}

.instagram-card p {
    padding: 16px 16px 8px;
    margin: 0;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.instagram-link {
    display: block;
    padding: 0 16px 18px;
    font-weight: 700;
}

.instagram-loading,
.instagram-empty,
.instagram-error {
    grid-column: 1 / -1;
    text-align: center;
}
</style>
