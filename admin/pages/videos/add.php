<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'Add video';
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
            
                <h3 class="d-inline">Video joylash</h3>

                <a href="index.php" class="btn btn-danger btn-sm float-right mt-1">Orqaga</a>

                <form action="save.php" method="POST" class="mt-4"  enctype="multipart/form-data">
                    <div class="card mx-auto">
                        <div class="card-body">
                            <p>Max: 10MB.<br />Format: mp4,avi.3gp.</p>
                            <div class="custom-file mb-2">
                                <input type="file" name="video" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Video tanlang</label>
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