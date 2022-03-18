<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'Galerya';
echo '<title>'.$title_page.'</title>';
$photos = mysqli_query($link,"SELECT * FROM photos");

?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<!-- galery content -->
<div class="container">
    <div class="row my-3">
        <div class="mx-auto d-flex col-11 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3>Galerya</h3>
            <div class="ml-auto">
                <a href="add.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <h5>Ishchilar va texnikalar</h5>
    <hr>
    <div class="row">
        <?php
            foreach($photos as $item):
                if($item['position'] == 1):
        ?>
                <div class="mx-auto py-3 col-11 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="block">
                        <img src="../../../assets/img/galerya/<?= $item['id']; ?>.jpg" class="img-fluid" height="300px">
                
                        <a class="block-icon py-2 px-3" href="delete.php?id=<?= $item['id']; ?>"><i class="fa fa-trash text-light"></i></a>
                    </div>
                </div>
        <?php
                endif;
            endforeach;
        ?>
    </div>
    
    <h5 class="mt-5">Mahsulotlar va texnikalar</h5>
    <hr>
    <div class="row">
        <?php
            foreach($photos as $item):
                if($item['position'] == 0):
        ?>
        <div class="mx-auto py-3 col-11 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <div class="block">
                <img src="../../../assets/img/galerya/<?= $item['id']; ?>.jpg" class="img-fluid" height="300px">
                
                <a class="block-icon py-2 px-3" href="delete.php?id=<?= $item['id']; ?>"><i class="fa fa-trash text-light"></i></a>
            </div>
        </div>
        <?php
                endif;
            endforeach;
        ?>
    </div>
</div>