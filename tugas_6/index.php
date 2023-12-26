<?php
require_once 'model.php';
require_once 'controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qasir</title>

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
                <div class="card border-primary">
                    <div class="card-header text-center">
                        <b>Qasir</b>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <table border="0">
                                <thead>
                                    <tr>
                                        <th style="width: 60%;">Kode Barang</th>
                                        <th style="width: 20%;">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($datas['temp_data']['code'])) : ?>
                                        <?php foreach ($datas['temp_data']['code'] as $key => $value) : ?>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" style="text-transform:uppercase" name="code[]" value="<?= $value ?>">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" name="qty[]" value="<?= $datas['temp_data']['qty'][$key] ?>">
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="code[]" style="text-transform:uppercase">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="qty[]">
                                            </td>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="code[]" style="text-transform:uppercase">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="qty[]">
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="text-right pt-2">
                                <input type="submit" class="btn btn-outline-success" name="action" value="Tambah Barang"><br>
                                <input type="submit" class="btn btn-block btn-outline-primary mt-2" name="action" value="Selesai">
                            </div>
                        </form>
                        <a href="" class="btn btn-block btn-outline-warning mt-2">Mulai Ulang</a>
                    </div>
                </div>

                <?php if (!empty($datas['data']['total'])) : ?>
                    <div class="card mt-2">
                        <div class="card-header">
                            <b>Nota</b>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm table-striped" style="font-size:x-small">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Kode</th>
                                        <th>Barang</th>
                                        <th class="right">Harga Satuan</th>
                                        <th class="center">Jumlah</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($datas['data']['item'])) : ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($datas['data']['item'] as $key => $value) : ?>
                                            <tr>
                                                <td class="center"><?= $i; ?></td>
                                                <td class="left"><?= $value['code'] ?></td>
                                                <td class="left"><?= $value['title'] ?></td>
                                                <td class="right"><?= idr($value['price']) ?></td>
                                                <td class="center"><?= $value['qty'] ?></td>
                                                <td class="right"><?= idr($value['total']) ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="col-12 row">
                                <div class="col-lg-7 col-sm-7">
                                </div>
                                <div class="col-lg-4 col-sm-5">
                                    <table class="table text-nowrap" style="font-size: x-small;">
                                        <tbody>
                                            <tr>
                                                <td class="left">
                                                    <strong>Subtotal</strong>
                                                </td>
                                                <td class="right"><?= idr($datas['data']['subtotal']) ?></td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Discount</strong>
                                                </td>
                                                <td class="right"><?= $datas['data']['discount'] ?>%</td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong>Total</strong>
                                                </td>
                                                <td class="right">
                                                    <strong><?= idr($datas['data']['total']) ?></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="./../vendor/jquery/jquery.min.js"></script>
    <script src="./../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>