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
            Tambah Data Inventaris
            </div>
            <div class="card-body">
    <form method="post" action="tambah_aksi4.php">
        <div class="mb-3">
            <label for="barang"class="form-table">Barang</label>
            <input type="text"class="form-control" id="barang" placeholder="Barang" name="barang">

        </div>
        <div class="mb-3">
            <label for="jumlah"class="form-table">Jumlah</label>
            <input type="text"class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah">
        </div>
        <div class="mb-3">
            <label for="kondisi"class="form-table">Kondisi</label>
            <input type="text"class="form-control" id="kondisi" placeholder="Kondisi" name="kondisi">
        </div>
        <a href="tables4.php"><button type="button"class="btn btn-danger mb-2">BATAL</button></a>
        <button type="submit"class="btn btn-success mb-2">TAMBAH</button>
    </form>
    </div>
</div>
</div>    
</body>