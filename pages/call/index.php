<?php

    // header section
    include "../../inc/header_lib.php";

    $title_text = 'ALOQA';
    $title_img = 'url(../../assets/img/products/2.jpg);';

    //banner section
    include "../../parts/_banner_img.php";

?>
<style>
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 60%;
        /* The width is the width of the web page */
    }

</style>
<script>
// tex maps
function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.036 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}

</script>

<div class="container-fluid text-center">
    <h3 class="mt-5 font-weight-bold" style=" font-size: 36px">
        <span style="color: #e74c3c;"> BIZ BILAN </span> BOG'LANING
    </h3>
    
</div>

<div class="container">
  <div id="map"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK25y55vdFL3sedReYjCfdzCtP17wuBPw&callback=initMap"
    async defer></script>


<?php
  // footer section
  include "../../inc/footer_lib.php";
?>