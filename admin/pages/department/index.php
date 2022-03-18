<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = "Mahsulotlar";
echo '<title>'.$title_page.'</title>';
$product = mysqli_query($link,"SELECT * FROM product_lang");

?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<!-- galery content -->
<div class="container">

    <div class="row my-3">
        <div class="mx-auto d-flex col-11 col-sm-12 col-md-12 col-lg-12 col-xl-12">            
            <h3>Boshqarmadagilar</h3>
            <div class="ml-auto">
                <a href="add.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <hr>
</div>

<div class="container">
    <div class="row">
        <?php
            foreach($product as $item):
                if(1):
        ?>
                <div class="my-4 mx-auto col-11 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="mx-auto col-11 col-sm-10 col-md-3 col-lg-3 col-xl-3">
                            <img src="../../../assets/img/products/<?= $item['product_id'] ?? 1; ?>.jpg" class="img-fluid">
                        </div>
                        <div class="mx-auto col-11 col-sm-10 col-md-8 col-lg-8 col-xl-8">
                            <h5><?= $item['title'] ?? "Unknown"; ?></h5>
                            <p class="text-black-50"><?= $item['about'] ?? "Unknown"; ?></p>
                        </div>
                        <div class="mx-auto text-center col-11 col-sm-10 col-md-1 col-lg-1 col-xl-1">
                            <a href="add_lang.php?id=<?= $item['id']; ?>" class="btn btn-secondary mt-1" style="padding: 2.5px 6px !important;">
                                <i class="fa fa-language fa-2x"></i>
                            </a>
                            <a href="edit.php?id=<?= $item['id']; ?>" class="btn btn-info mt-1">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="delete.php?id=<?= $item['product_id']; ?>" class="btn btn-danger mt-1">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
                endif;
            endforeach;
        ?>
    </div>
</div>