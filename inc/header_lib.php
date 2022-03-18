<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-danger">Bakantex</title>

    <!-- Page logo -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/logos/logo-b.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/logos/logo-b.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/logos/logo-b.png"/>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="./../assets/css/bootstrap.min.css">

    <!-- Owl carousel css -->
    <link rel="stylesheet" href="./../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./../assets/css/owl.theme.default.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="./../assets/css/font-awesome.min.css">

    <!-- CSS style-->
    <link rel="stylesheet" href="./../style.css">

<?php
    include "./../inc/function.php";
?>

</head>

<body>

    <!-- header -->
    <header class="fixed-top">
        <div class="container">
            <!-- #Navbar Menu -->
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="../../admin/">
                    <img src="../../assets/img/logos/logo-small.png" class="my-auto" width="200px">
                </a>
                <button onclick="myFunction(this)" class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <div>
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="../index/">Bosh&nbsp;sahifa</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Biz haqimizda
                            </a>
                            <div class="dropdown-menu text-center">
                                <a class="dropdown-item" href="../kompany/">Kompaniya</a>
                                <a class="dropdown-item" href="../department/">Boshqarma</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../call/">Aloqa</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Galereya
                            </a>
                            <div class="dropdown-menu text-center">
                                <a class="dropdown-item" href="../photos/">Fotosuratlar</a>
                                <a class="dropdown-item" href="../videos/">Videaolar</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../news/">Yangiliklar</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../product/">Mahsulot</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../karyera/">Karyera</a>
                        </li>
                
                        <!-- Language dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                                <img src="../../assets/img/lang/uz.png">
                            </a>
                            <div class="dropdown-menu text-center lang">
                                <a class="dropdown-item p-2" href="#"><img src="../../assets/img/lang/ru.png"></a>
                                <a class="dropdown-item p-2" href="#"><img src="../../assets/img/lang/en.png"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- !#Navbar Menu -->
        </div>
    </header>
    <!-- !header -->

    <!-- main -->
    <main>
