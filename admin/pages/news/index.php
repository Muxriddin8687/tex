<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'eJournal - Административная панель';
echo '<title>'.$title_page.'</title>';
$list = mysqli_query($link,"SELECT * FROM news");

?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<div class="container-fluid">

<div class="row">

    <div class="col-md-12">

        <div class="card shadow mb-4 border-bottom-danger">
            <div class="card-body">
                <h3>Новости</h3>
                <div class="float-right" style="margin-top:-40px;">
                    <a href="add.php" class="btn btn-primary btn-sm float-right">Новый</a>
                </div>


                <div class="row px-3 py-3" >

                    <table id="newsTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Дата</th>
                                <th>Тема</th>
                                <th>Короткая информация</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row = $list->fetch_assoc()){
                           echo '<tr>';
                           echo     '<td>'.$row['id'].'</td>';
                           echo     '<td width="100px">'.$row['date'].'</td>';
                           echo     '<td>'.$row['title'].'</td>';
                           echo     '<td>'.short_content_news($row['short_content']).'</td>';
                           echo     '<td width="90px">
                                        <a class="btn btn-sm btn-info" href="edit.php?id='.$row['id'].'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a class="btn btn-sm btn-danger" href="delete.php?id='.$row['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>';
                           echo '</tr>';
                        }                
                        ?>
                        </tbody>
                    </table>

                <?php
               
                
                ?>
                </div>
                

<!--                 
                
                <table class="table table-bordered table-striped table-sm text-xsmall" id="simple_table" width="100%" cellspacing="0">

                    <thead>
                        <th>ID</th>
                        <th>Дата</th>
                        <th>Название</th>
                        <th>Короткая информация</th>
                        <th>Подробный</th>
                        <th></th>
                        <th></th>
                    </thead>

                    <tbody>

                    

                    </tbody>

                </table> -->
                
                
            </div>
        </div>

    </div> <!-- .col-6 -->

   
</div> <!-- .row -->

</div> <!-- .container -->


</html>