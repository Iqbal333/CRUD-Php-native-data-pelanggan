<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<h3>Edit Data Pelanggan</h3>
    <br>
    <?php
        include 'koneksi.php';
        $id = $_GET['no_pelanggan'];
        $data = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE no_pelanggan='$id'");
        while($d = mysqli_fetch_array($data)) 
        {
    ?>
    <div class="container">
        <div class="col-md-12">
            <form method="post" action="update.php">
                <div class="form-group">
                    <label>No Pelanggan</label>
                    <input type="number" class="form-control" name="no_pelanggan" value="<?php echo $d['no_pelanggan']; ?>">
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>">
                </div>


                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3"><?php echo $d['alamat']; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Handphone</label>
                    <input type="number" class="form-control" name="handphone" value="<?php echo $d['handphone']; ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $d['email']; ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="index2.php">Kembali</a>
            </form>
        </div>
    </div>
       
        <?php
    }
    ?>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>