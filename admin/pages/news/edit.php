<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'eJournal - Административная панель';
echo '<title>'.$title_page.'</title>';

$sql = mysqli_query($link,"SELECT * FROM news WHERE id=".$_REQUEST['id']);
$row = $sql->fetch_assoc();

?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<div class="container-fluid">

<div class="row">

    <div class="col-md-12">

        <div class="card shadow mb-4 border-bottom-danger">
            <div class="card-body">
            
                <h3>Новости - Добавить</h3>
                <div class="float-right" style="margin-top:-40px;">
                    <a href="add.php" class="btn btn-primary btn-sm float-right">Новый</a>
                </div>
                
                <form action="update.php" method="POST" class="mt-4"  enctype="multipart/form-data" style="width:60%" >
                    <input type="hidden" value="<?=$_REQUEST['id']?>" name="id" />
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Дата</span>
                        </div>
                        <input type="date" value="<?=$row['date']?>" name="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">                        
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Тема</span>
                        </div>
                        <input type="text" value="<?=$row['title']?>" class="form-control" name="title" placeholder="Введите тема" aria-label="Username" aria-describedby="basic-addon1">                        
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Короткая инфо</span>
                        </div>
                        <input type="text" value="<?=$row['short_content']?>" name="short_data" class="form-control" placeholder="Короткая информация" aria-label="Username" aria-describedby="basic-addon1">                        
                    </div>


                    <textarea id="summernote" name="more_data" rows="15">
                        <?=$row['content']?>
                    </textarea>

                    <br />
                    <div class="form-field">
                        <label for="contact-message">Размер фотографии должен быть 710x420px <span></span></label>
                        <input type="file" name="photo" />
                    </div>

                    <img src="../../../images/news/<?=$row['id']?>.jpg" width="400px" />

                    <br /><br />
                    <input type="submit" value="Сохранить" class="btn btn-info" />

                </form>
                
            </div>
        </div>

    </div> <!-- .col-6 -->

   
</div> <!-- .row -->

</div> <!-- .container -->

<script>

$(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'Введите подробные данные',
        height: 200
    });
});

</script>

</html>