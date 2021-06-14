<?php
$id_gaji = $_GET['id_gaji'];
include 'model.php';
$model = new Model();
$data = $model->edit_gaji($id_gaji);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit</title>
</head>

<body>
    <h1>Form Edit Data SPV</h1>
    <a href="gaji.php">Back</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID Gaji</label>
        <br>
        <input type="text" name="id_gaji" value="<?php echo $data->id_gaji ?>">
        <br>
        <label>ID SPV</label>
        <br>
        <input type="text" name="id_spv" value="<?php echo $data->id_spv ?>">
        <br>
        <label>Gaji Pokok</label>
        <br>
        <input type="text" name="gaji_pokok" value="<?php echo $data->gaji_pokok ?>">
        <br><br>
        <button type="submit" name="submit_edit_gaji">Submit</button>
    </form>
</body>
</html>