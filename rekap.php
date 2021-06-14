<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
<title>Rin's Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav>
    <div class="logo">
        <h4>Rin's Store</h4>
    </div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="spv.php">Daftar SPV</a></li>
        <li><a href="gaji.php">Daftar Gaji</a></li>
        <li><a href="rekap.php">Rekap Gaji</a></li>
    </ul>

    <div class="menu-toggle">
        <input type="checkbox"/>
        <span></span>
        <span></span>
        <span></span>
    </div>

</nav>

<h1><p style="text-align:center">Rekap Gaji SPV</h1></p>
        <br>
        <a href="printrekap.php" target="_blank">Cetak Rekapan</a>
        <br>
        <thead>
                <tr>
                <div class="menu-toggle">
            <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID SPV</th>
                    <th>Nama SPV</th>
                    <th>Gaji Pokok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $model->tampil_rekap();
                if (!empty($result)) {
                    foreach ($result as $data) : ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id_spv ?></td>
                            <td><?= $data->nama_spv ?></td>
                            <td><?= $data->gaji_pokok ?></td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                    <tr>
                    <p style="text-align:center"><td colspan="6">Tidak Ada Data</td></p>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html> 