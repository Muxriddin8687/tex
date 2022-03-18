<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'Videos';
echo '<title>'.$title_page.'</title>';
$videos = mysqli_query($link,"SELECT * FROM videos");

?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<!-- galery content -->
<div class="container">

    <div class="row my-3">
        <div class="mx-auto d-flex col-11 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3>Videolar</h3>
            <div class="ml-auto">
                <a href="add.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <?php
            foreach($videos as $item):
        ?>
                <div class="mx-auto my-5 col-11 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="block-v">
                         <video class="img-fluid" controls>
                            <source src="../../../assets/img/videos/<?= $item['id']; ?>.mp4" type="video/mp4">
                            <source src="../../../assets/img/videos/<?= $item['id']; ?>.ogg" type="video/ogg">
                        </video> 
                
                        <a class="icon-v py-2 px-3" href="delete.php?id=<?= $item['id']; ?>"><i class="fa fa-trash text-light"></i></a>
                    </div>
                </div>
        <?php
            endforeach;
        ?>
    </div>
</div>