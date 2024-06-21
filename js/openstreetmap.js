document.addEventListener('DOMContentLoaded', function() {
    const maps = document.querySelectorAll('.openstreetmap');

    maps.forEach((map) => {
        const lat = map.dataset.lat;
        const lng = map.dataset.lng;
        const zoom = map.dataset.zoom || 13;
        const markerLat = map.dataset.markerLat;
        const markerLng = map.dataset.markerLng;
        const markerPopup = map.dataset.markerPopup;

        const osmMap = L.map(map).setView([lat, lng], zoom);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(osmMap);

        if (markerLat && markerLng) {
            const marker = L.marker([markerLat, markerLng]).addTo(osmMap);
            if (markerPopup) {
                marker.bindPopup(markerPopup).openPopup();
            }
        }
    });
});
