<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data</title>
</head>

<body>
    <h1>Form Tambah Data Gaji SPV</h1>
    <a href="gaji.php">Back</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID Gaji</label>
        <br>
        <input type="text" name="id_gaji">
        <br>
        <label>ID SPV</label>
        <br>
        <input type="text" name="id_spv">
        <br>
        <label>Gaji Pokok </label>
        <br>
        <input type="text" name="gaji_pokok">
        <br><br>
        <button type="submit" name="submit_simpan_gaji">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>