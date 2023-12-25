<?php
require_once 'model.php';
require_once 'controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./../vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="col-12 pt-5">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-lg-4">
                <?php if (!empty($datas['notif'])) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= @$datas['notif'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <b>Pengecekan NIM <i>UNISBANK</i></b>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" style="text-transform:uppercase">
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="nim" class="form-control" name="nim">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Check</button>
                                <a href="" class="btn btn-primary">Ulangi</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        <?php if (!empty($datas['data'])) : ?>
                            <table border="0">
                                <tr>
                                    <td>Nama</td>
                                    <td> : </td>
                                    <td><?= $datas['data']['name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun Angkatan</td>
                                    <td> : </td>
                                    <td><?= $datas['data']['th_angkatan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Fakultas</td>
                                    <td> : </td>
                                    <td><?= $datas['data']['dt_fk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Prodi</td>
                                    <td> : </td>
                                    <td><?= $datas['data']['dt_prodi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Urut</td>
                                    <td> : </td>
                                    <td><?= $datas['data']['no_urut'] ?></td>
                                </tr>
                            </table>
                        <?php else : ?>
                            <div class="text-center">
                                <i><b>Tidak Ada Data!</b></i>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./../vendor/jquery/jquery.min.js"></script>
    <script src="./../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>