<?php
$koneksi = mysqli_connect("localhost", "root", "", "tugas_7") or die(mysqli_error($koneksi));

$sql = "SELECT * FROM mahasiswa";
$data = mysqli_query($koneksi, $sql);

if (isset($_POST['nama'])) {
    $sql = "INSERT INTO mahasiswa (nama, nim, kelamin, hobi, fakultas, alamat) VALUES ('" . $_POST['nama'] . "', '" . $_POST['nim'] . "', '" . $_POST['kelamin'] . "', '" . $_POST['hobi'] . "', '" . $_POST['fakultas'] . "', '" . $_POST['alamat'] . "')";
    $simpan = mysqli_query($koneksi, $sql);
    if ($simpan) {
        print_r('Data berhasil disimpan.');
    } else {
        print_r('Data gagal disimpan. (' . mysqli_error($koneksi) . ')');
    }

    $sql = "SELECT * FROM mahasiswa";
    $data = mysqli_query($koneksi, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="card">
        <div class="card-header">
            <h2>Data Mahasiswa</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>NIM</th>
                    <th>Kelamin</th>
                    <th>Hobi</th>
                    <th>Fakultas</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)) : ?>
                    <?php foreach ($data as $key => $value) : ?>
                        <tr>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['nim'] ?></td>
                            <td><?= $value['kelamin'] ?></td>
                            <td><?= $value['hobi'] ?></td>
                            <td><?= $value['fakultas'] ?></td>
                            <td><?= $value['alamat'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <div class="card" style="margin-top:20px">
        <form id="mahasiswaForm" action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label>Jenis Kelamin:</label>
            <label for="laki-laki">
                <input type="radio" id="laki-laki" name="kelamin" value="laki-laki"> Laki-laki
            </label>

            <label for="perempuan">
                <input type="radio" id="perempuan" name="kelamin" value="perempuan"> Perempuan
            </label>

            <label for="hobi">Hobi:</label>
            <label for="sepakbola">
                <input type="checkbox" id="sepakbola" name="hobi" value="sepakbola"> Sepakbola
            </label>
            <label for="basket">
                <input type="checkbox" id="basket" name="hobi" value="basket"> Basket
            </label>

            <label for="fakultas">Fakultas:</label>
            <select id="fakultas" name="fakultas">
                <option value="FTII">FTII</option>
                <option value="FEB">FEB</option>
                <option value="FHB">FHB</option>
                <option value="VOKASI">VOKASI</option>
            </select>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="4" required></textarea>

            <button type="submit">Tambah Data</button>
        </form>
    </div>
</body>

</html>