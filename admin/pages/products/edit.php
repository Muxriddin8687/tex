<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'Add product';
echo '<title>'.$title_page.'</title>';

$id = $_GET['id'];
$product = mysqli_query($link,"SELECT * FROM product_lang WHERE id='{$id}';");
?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="card shadow mb-4 border-bottom-danger">
                <div class="card-body">
                
                    <h3 class="d-inline">Mahsulotni taxrirlash</h3>

                    <a href="index.php" class="btn btn-danger btn-sm float-right mt-1">Orqaga</a>

                    <form action="update.php" method="POST" class="mt-4"  enctype="multipart/form-data">
                        <?php
                            foreach ($product as $product):
                        ?>
                        <div class="card mx-auto">
                            <div class="card-body">
                                <h6>Tilni tanlang.</h6>
                                <div class="d-flex mx-auto">
                                    <label for="1">UZ
                                        <input type="radio" id="1" name="lang" value="1" checked />
                                    </label>
                                    <label for="2" class="mx-4">RU
                                        <input type="radio" id="2" name="lang" value="2" />
                                    </label>
                                    <label for="3">EN
                                        <input type="radio" id="3" name="lang" value="3" />
                                    </label>
                                </div>
                                <input type="text" name="title" placeholder="Mahsulot nomi" class="form-control" value="<?= $product['title'] ?>" />
                                <br />

                                <textarea rows="4" name="about" placeholder="Mahsulot haqida" class="form-control"><?= $product['about'] ?></textarea>
                                <br />
                                <div class="row">
                                    <div class="mx-auto col-11 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <img src="../../../assets/img/products/<?= $product['product_id'] ?>.jpg" class="img-fluid">
                                    </div>
                                    <div class="mx-auto align-self-end col-11 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-4">
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Rasmni o'zgartirish</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <input type="hidden" name="pr_id" value="<?= $product['product_id']; ?>">
                                <input type="hidden" name="pr_lang_id" value="<?= $product['id']; ?>">
                                <button class="btn btn-success" type="submit">Saqlash</button>
                            </div>
                        </div>
                        <?php
                            endforeach;
                        ?>
                    </form>
                    
                </div>
            </div>

        </div> <!-- .col-6 -->
    </div> <!-- .row -->

</div> <!-- .container -->

</html>