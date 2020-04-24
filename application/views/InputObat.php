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
    <title>Input Obat KidsCare</title>
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
            background-image: url('https://cdn0-production-images-kly.akamaized.net/mznHlYed0VeT1lxLZyxSg-PzCiI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1583162/original/090823200_1493797707-Jangan-Gunakan-Antibiotik-Sembarangan-Ini-Alasannya.jpg');
            background-size:cover
        }

</style>
<body>
            <div class="card mx-auto" id="login">
            <form enctype="multipart/form-data" class=" border border-light p-5" action="<?= site_url('InputObatController/addMedicineFinal')?>" method = "post" >
                <?php echo $this->session->flashdata('error_messages'); ?>
                <?php echo $this->session->flashdata('good_messages'); ?>
                <h1><img src="../assets/image/Logo.png">Obat</h1><br>
                <p>Nama Obat</p>
                <input type="text" name="namaobat" class="form-control mb-4">
                <p>Jenis Obat</p>
                <input type="text" name="jenisobat" class="form-control mb-4">
                <label>Gambar</label><br>
                <input type="file" class="form-control" name="foto">
                <br>
               <!-- input button -->
                <button class="btn btn-info btn-block my-4" type="submit" style="border-radius: 10px;">Input</button>
                <a href="<?= site_url('HomeObatController') ?>" type="submit" style="border-radius: 10px;"> < Back</a>
            </form>
    
        </div>
</body>

</html>