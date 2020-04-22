<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
    <title>Admin Page</title>
</head>
<style type="text/css">
        #nav-item a {
            color: #444547;
        }

        #login {
            margin-top: 50px;
            width: 30%;
            margin-bottom: 80px;
        }
        body{
            padding: 0px;
            background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-medical-doctor-science-background-backgroundbackgrounddoctorsmedicalmedicinehealth-image_68227.jpg');
            background-size:cover
        }

</style>
<body>
            <div class="card mx-auto" id="login">
            <form class=" border border-light p-5">
                <h1><img src="../assets/image/Logo.png">Jadwal Imunisasi</h1><br><br>
                <table class= "table">
                    <thead>
                        <tr>
                        <th scope="col">Jadwal Imunisasi</th>
                        <th scope="col">ID Imunisasi</th>
                        <th scope="col">ID Rumah Sakit</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr><?php foreach($data_jadwal as $dj) : ?>
                            <th scope="row"><?= $dj['jadwal_imunisasi']?></th>
                            <th scope="row"><?= $dj['id_imunisasi']?></th>
                            <td><?= $dj['id_rs']?></td>
                            <td><?= $dj['harga']?></td>
                            <td><a  href="<?= site_url('EditJadwalController/index/'.$dj['id_jadwal'])?>" type="submit" style="border-radius: 10px;">Edit</a></td>
                            <td><a href="<?=  site_url('DeleteController/deleteSchedule/'.$dj['id_jadwal']) ?>" type="submit" style="border-radius: 10px;">Delete</a></td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= site_url('inputImunisasiJadwalController')?>" class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Input Jadwal Imunisasi</a>
                <a href="<?= site_url('HomeAdminController') ?>" type="submit" style="border-radius: 10px;"> < Back</a>
            </form>
        </div>
</body>

</html>