<template>
    <div>
        <h1>mapvue</h1>
        <body>
            <h3>My Google Maps Demo</h3>
            <!--The div element for the map -->
            <h1>hi</h1>
            <button @click="initMap">mapbtn</button>
            <div id="map" class=""></div>
        </body>
    </div>
</template>

<script>
export default {
    name: "Map",
    data() {
        return {
            map: null,
            mapCenter: { lat: 0, lng: 0 },
        };
    },

    methods: {
        initMap() {
            // const myLatlng = { lat: 3.15924, lng: 101.61337 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 7,
                center: myLatlng,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    mapTypeIds: ["roadmap", "terrain"],
                },
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.LEFT_CENTER,
                },
                scaleControl: true,
                streetViewControl: true,
                streetViewControlOptions: {
                    position: google.maps.ControlPosition.LEFT_TOP,
                },
                fullscreenControl: true,
            });
            const marker = new google.maps.Marker({
                position: myLatlng,
                map,
                title: "Click to zoom",
            });

            map.addListener("center_changed", () => {
                // 3 seconds after the center of the map has changed, pan back to the
                // marker.
                window.setTimeout(() => {
                    map.panTo(marker.getPosition());
                }, 3000);
            });
            marker.addListener("click", () => {
                map.setZoom(12);
                map.setCenter(marker.getPosition());
            });
        },
    },
};
</script>

<style>
#map {
    height: 100%;
}
</style>
