<?php
$id_spv = $_GET['id_spv'];
include 'model.php';
$model = new Model();
$data = $model->edit_spv($id_spv);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit</title>
</head>

<body>
    <h1>Form Edit Data SPV</h1>
    <a href="spv.php">Back</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID SPV</label>
        <br>
        <input type="text" name="id_spv" value="<?php echo $data->id_spv ?>">
        <br>
        <label>Nama SPV</label>
        <br>
        <input type="text" name="nama_spv" value="<?php echo $data->nama_spv ?>">
        <br><br>
        <button type="submit" name="submit_edit_spv">Submit</button>
    </form>
</body>
</html>