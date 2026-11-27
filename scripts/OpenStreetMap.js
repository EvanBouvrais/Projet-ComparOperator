const destinationCards = document.querySelectorAll('.destination-card');
const map = document.getElementById('map');

destinationCards.forEach(destination => {

    destination.addEventListener('mouseenter', () => {

        const lat = Number(destination.dataset.lat);
        const lon = Number(destination.dataset.lon);

        console.log("Destination survolée :", destination);
        console.log("Coordonnées :", lat, lon);

        const delta = 0.15;

        const bbox = [
            lon - delta,
            lat - delta,
            lon + delta,
            lat + delta
        ].join(',');

        const params = new URLSearchParams({
            bbox: bbox,
            layer: 'mapnik',
            marker: `${lat},${lon}`
        });

        map.src = `https://www.openstreetmap.org/export/embed.html?${params}`;

    });

});