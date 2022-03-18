<?php
include('../../inc/header_libs_sub.php');
include('../../inc/connect.php');
$title_page = 'Aloqa';
echo '<title>'.$title_page.'</title>';
$call = mysqli_query($link,"SELECT * FROM `call`");
$karyera = mysqli_query($link,"SELECT k.id, k.name, k.borthday, k.hobby, k.phone, k.email, k.adress, (SELECT r.region_name FROM `region` AS r WHERE r.id=k.region_id) AS region, (SELECT f.id FROM `file` AS f WHERE k.id=f.karyera_id) AS file, k.about FROM `karyera` AS k");
?>

</head>

<body>

<?php include('../../inc/navbar_sub.php'); ?>

<!-- galery content -->
<div class="container-fluid">

    <h3 class="text-black-50 font-weigh-bold mt-5">Xabar yo'llaganlar ro'yxati</h3>
    <hr>

        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Ismi</th>
                    <th>Email</th>
                    <th>Mavzu</th>
                    <th>Matn</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 1;
                foreach($call as $item):
            ?>
                    <tr>
                        <td width="40px"><?= $i++; ?></td>
                        <td><?= $item['name']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td><?= $item['theme']; ?></td>
                        <td><?= $item['text']; ?></td>
                        <td width="40px">
                            <a href="delete_call.php?id=<?= $item['id']; ?>" class="text-danger h5"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
            <?php
                endforeach;
            ?>
            </tbody>
        </table>


    <h3 class="text-black-50 font-weigh-bold mt-5">Ish so'raganlar ro'yxati</h3>
    <hr>

        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Ismi</th>
                    <th>Tug'ilgan<br>kuni</th>
                    <th>So'ragan<br>kasbi</th>
                    <th>Telefon</th>
                    <th>Email</th>
                    <th>Viloyat</th>
                    <th>Manzil</th>
                    <th>O'zi haqida</th>
                    <th>Rezyume</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 1;
                foreach($karyera as $item):
            ?>
                    <tr>
                        <td width="40px"><?= $i++; ?></td>
                        <td><?= $item['name']; ?></td>
                        <td><?= $item['borthday']; ?></td>
                        <td><?= $item['hobby']; ?></td>
                        <td><?= $item['phone']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td><?= $item['region']; ?></td>
                        <td><?= $item['adress']; ?></td>
                        <td><?= $item['about']; ?></td>
                        <td>
                            <a href="../../../assets/files/<?= $item['file']; ?>.pdf" download>Rezyume</a>
                        </td>
                        <td width="40px">
                            <a href="delete_karyera.php?id=<?= $item['id']; ?>" class="text-danger h5"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
            <?php
                endforeach;
            ?>
            </tbody>
        </table>

</div>