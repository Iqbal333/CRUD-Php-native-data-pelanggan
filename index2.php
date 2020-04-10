<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <title>Hello, world!</title>
  </head>
  <body>


  <div class="container">
    <div class="col-md-12">
    <h4 style="text-align: center">Data Pelanggan</h4>
    <marquee behavior="" direction="">Satria Bagaskara | UAS WEB 2020</marquee>
        <br>
        <a class="btn btn-primary float-right" href="tambah.php">+ Tambah Pelanggan</a>
        <br><br>
        <table border="1" id="datatable" class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>No Pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            </thead>
            
            <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT*FROM tb_pelanggan");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['no_pelanggan']; ?></td>
                        <td><?php echo $d['nama_lengkap']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['handphone']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="edit.php?no_pelanggan=<?php echo $d['no_pelanggan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?no_pelanggan=<?php echo $d['no_pelanggan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ingin menghapus data?')">Hapus</a>
                          </div>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        
    </div>
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#datatable').DataTable();
      } );
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  </body>
</html>