<?php

include "koneksi.php";
$id = isset($_GET['id']) ? $_GET['id'] : '';
$ambilData = mysqli_query($koneksi, "SELECT * FROM inv33 WHERE id='$id'");
$data = mysqli_fetch_array($ambilData) 
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie=edge">
    <title>UBAH DATA</title>
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <script src="js/sb-admin-2.js"></script>
</head>
<body>
<div class="container col-md-6">
    <div class="card">
        <div class="card-header bg-primary text-white">
        Edit Data Inventaris
        </div>
        <div class="card-body">
             <form method="POST" class="form-action" action="edit_aksi4.php">

                <div class="form-group">
                    <label for="barang" class="form-label">Barang</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="barang" value="<?php echo $data['barang']?>" class="form-control col-md-9" placeholder="Barang"></input>
                </div>
                <div class="form-group">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" value="<?php echo $data['jumlah']?>" class="form-control col-md-9" placeholder="Jumlah">
                </div>
                <div class="form-group">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" name="kondisi" value="<?php echo $data['kondisi']?>" class="form-control col-md-9" placeholder="Kondisi"></input> 
                </div>
                <a href="tables1.php">
                <button type="submit" class="btn btn-success mb-2" name="simpan">SIMPAN</button></a>
                <button type="reset" class="btn btn-danger mb-2">BATAL</button>
                </form>
    </div>
</div>   
     
</body>

    
<?php

?>
</div>