<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cetak Rekapan</title>
    <style>
        h1 {
            text-align: center;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align:left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>
        <h1>Rekap Gaji Rin's Store</h1>
        <table>
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
                        <td colspan="15">Tidak Ada Data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
</body>
</html>