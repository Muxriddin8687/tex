<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'Add product';
echo '<title>'.$title_page.'</title>';

?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<div class="container">

<div class="row">

    <div class="col-md-12">

        <div class="card shadow mb-4 border-bottom-danger">
            <div class="card-body">
            
                <h3 class="d-inline">Mahsulot qo'shish</h3>

                <a href="index.php" class="btn btn-danger btn-sm float-right mt-1">Orqaga</a>

                <form action="save.php" method="POST" class="mt-4"  enctype="multipart/form-data">
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
                            <input type="text" name="title" placeholder="Mahsulot nomi" class="form-control" />
                            <br />
                            <textarea rows="4" name="about" placeholder="Mahsulot haqida" class="form-control"></textarea>
                            <br />
                            <div class="custom-file mb-2">
                                <input type="file" name="photo" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Rasm tanlang</label>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-success" type="submit">Saqlash</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>

    </div> <!-- .col-6 -->

   
</div> <!-- .row -->

</div> <!-- .container -->

</html>