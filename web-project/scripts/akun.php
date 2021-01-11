<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .marg {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }
    </style>

    <title>Akun</title>
  </head>
  <body>
    <?php include 'nav.php' ?>
    
    <div class="container marg">
        <div class="row">
            <!-- Side Button -->
            <div class="col-lg-3 col-md-3 col-xl-3">
                <div class="card">
                    <div class="card-header"><h3>Akun</h3></div>
                    <div class="card-body px-0 py-0">
                        <ul class="list-group list-group-flush">
                            <a href="akun.php" class="list-group-item list-group-item-action active py-3">Akun Saya</a>
                            <a href="transaksi-history.php" class="list-group-item list-group-item-action py-3">Histori Transaksi</a>
                          </ul>
                    </div>
                </div>
            </div>

            <!-- Akun Bagi 2 -->
            <div class="col-lg-9 col-md-9 col-xl-9">

                <!-- Informasi Kontak -->
                <div class="card">
                    <div class="card-header"><h3>Informasi Kontak</h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                Nama: Ahmad Dayat<br>
                                Email: adayat00@gmail.com<br>
                                Jenis Kelamin: Laki - Laki<br>
                                No. Hp: 081234765809<br>
                            </div>
                            <div class="col-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalCenter">
                                UBAH
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Ubah Informasi Kontak -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Informasi Kontak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" role="form" method="get">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="custom-select">
                                    <option value="Laki-Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nohp">No. Hp</label>
                                <input type="text" name="nohp" class="form-control" value="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Alamat Pengiriman -->
                <div class="card mt-xl-3">
                    <div class="card-header"><h3>Alamat Pengiriman</h3></div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Provinsi">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Kabupaten">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Kecamatan">
                                <input class="form-control mb-3" type="text" placeholder="Alamat Lengkap">
                                <input class="form-control mb-3 w-50" type="text" placeholder="Kode Pos">
                                <button class="btn btn-md btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>