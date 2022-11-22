<!-- <h1>Ini Halaman Pemetaan</h1> -->

<div id="map" style="height: 500px;"></div>

<script>
    const map = L.map('map').setView([-7.966707124827504, 112.6335233943757], 14);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    // maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

</script>