<!-- _map.blade.php -->

<div class="mapform">
    <div class="row">
        <div class="col-5">
            <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
        </div>
        <div class="col-5">
            <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
        </div>
    </div>
    <div id="map" style="height:400px; width: 800px;" class="my-3"></div>
</div>

<script>
    function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 49.02747346571906, lng: 104.0450450297728 },
        zoom: 15,
        scrollwheel: true,
    });

    const uluru = { lat: 49.02747346571906, lng: 104.0450450297728 };
    let marker = new google.maps.Marker({
        position: uluru,
        map: map,
        draggable: true
    });

    google.maps.event.addListener(marker, 'position_changed', function () {
        let lat = marker.position.lat()
        let lng = marker.position.lng()
        $('#lat').val(lat)
        $('#lng').val(lng)
    })

    google.maps.event.addListener(map, 'click', function (event) {
        pos = event.latLng
        marker.setPosition(pos)
    })
}

</script>
