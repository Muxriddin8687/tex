<?php

    // header section
    include "../../inc/header_lib.php";

    $title_text = 'FOTOSURATLAR';
    $title_img = 'url(../../assets/img/products/2.jpg);';

    //banner section
    include "../../parts/_banner_img.php";

?>

    <!-- photo galery section -->
    <section id="photos">
        <div class="container px-0 border my-4">

            <!-- Tab links -->
            <div class="tab d-flex">
                <button class="tablinks active ring border-right w-50 py-2" onclick="openCity(event, 'ring')">RING YARN MILL</button>
                <button class="tablinks open py-2 w-50" onclick="openCity(event, 'open')">OPEN AND YARN MILL</button>
            </div>

            <!-- Tab content -->
            <div id="ring" class="tabcontent p-3 border">
                <div class="row">
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab content -->
            <div id="open" class="tabcontent p-3 border">
                <div class="row">
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="item col-11 col-sm-6 col-md-4 col-lg-4">
                        <a href="#">
                            <img src="../../assets/img/products/2.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php
    // footer section
    include "../../inc/footer_lib.php";
?>