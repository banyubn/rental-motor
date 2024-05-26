<?php
require 'oop.php';

if (isset($_POST['submit'])) {
    $hasil = new Motor($_POST['nama'], $_POST['durasi'], $_POST['jenis']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/poppins-font.css">

    <title>Anyu | Rental Motor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav>
            <div class="header-title">
                <h1 style="font-weight: bold;">Rental Motor</h1>
            </div>
        </nav>
    </header>
    <div style="padding-top: 150px;">
        <div class="container w-75 rounded py-4 shadow" style="border: solid 2px black; padding-top: 500px;">
            <form action="" method="POST">
                <label class="fw-bold text-secondary" for="nama">Nama Pelanggan : </label>
                <input type="text" name="nama" id="nama" class="form-control" required>
                <br>
                <label class="fw-bold text-secondary" for="durasi">Lama Waktu Rental (per hari) : </label>
                <input type="number" name="durasi" id="durasi" class="form-control" required>
                <br>
                <label class="fw-bold text-secondary" for="jenis">Jenis Motor</label>
                <select name="jenis" id="jenis" class="form-control">
                    <option value="Scooter">Scooter</option>
                    <option value="Pespa">Pespa</option>
                    <option value="Vario Merah">Vario Merah</option>
                    <option value="RX King">RX King</option>
                </select>
                <br>
                <input type="submit" name="submit" class="btn btn-warning text-white">
            </form>
        </div>
    </div>

    <?php if (isset($_POST['submit'])) : ?>
        <div class="container w-75 rounded mt-3" style="border: solid 2px black;">
            <?php $hasil->print(); ?>
        </div>
    <?php endif; ?>
</body>

</html>