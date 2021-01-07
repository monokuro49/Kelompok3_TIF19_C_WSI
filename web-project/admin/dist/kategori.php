
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hi Valeeqa - Admin</title>
  </head>
  <body>
    <?php include "sidebar.php"; ?>
    <?php require_once "connection.php"; ?>
    <div class="container">
        <h1 class="mt-4">Data Kategori</h1>
        <!-- Table -->
        <div class="container-fluid">
            <a href="edit-kategori.php?status=add" class="btn btn-dark mb-2" style="float: right;">Tambah Kategori</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <?php
                    // Query
                    $sql = "SELECT * FROM kategori";
                    $query = mysqli_query($conn, $sql);
                    
                    
                    // Pagination
                    $batas = 10;
                    $halaman = isset($_GET["halaman"]) ? $_GET["halaman"]: 1;
                    $halaman_awal = $halaman>1 ? ($halaman * $batas) - $batas : 0;// Untuk tiap nomor
                    
                    $next = $halaman + 1;
                    $previous = $halaman - 1;

                    $total_data = mysqli_num_rows($query);
                    $total_halaman = ceil($total_data / $batas);
                    $nomor = $halaman_awal + 1;
                    // Query data sesuai halaman
                    $sql = "SELECT * FROM kategori LIMIT $halaman_awal, $batas";
                    $query = mysqli_query($conn, $sql);
                    while($data = mysqli_fetch_array($query)){
                ?>      
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $data["nama_kategori"]; ?></td>
                            <td>
                                <a href="edit-kategori.php?status=edit&id_kategori=<?php echo $data['id_kategori']; ?>" class="btn btn-link">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:delete_cat()" class="btn btn-link">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <script>
                                    function delete_cat(){
                                        var status = confirm("Apakah anda yakin ingin menghapusnya?");
                                        if(status == true){
                                            location.href = "delete-kategori.php?id_kategori=<?php echo $data['id_kategori']; ?>";
                                        }else{
                                            return false;
                                        }
                                    }
                                </script>
                            </td>
                        </tr>
                <?php
                        $nomor++;
                    }
                ?>
            </table>
            <!-- Pagination -->
            <nav>
                <ul class="pagination justify-content-end">
                    <?php
                        if($halaman == 1){
                            echo "<li class='page-item disabled'><a class='page-link' href='#'>Previous</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link' href='data-produk.php?halaman=$previous'>Previous</a></li>";
                        }
                    ?>
                    <?php
                        
                        for($i=1; $i<=$total_halaman; $i++){
                            if($halaman == $i){
                                echo "<li class='page-item disabled'><a class='page-link' href='data-produk.php?halaman=$i'>$i</a></li>";
                            }else{
                                echo "<li class='page-item'><a class='page-link' href='data-produk.php?halaman=$i'>$i</a></li>";
                            }
                        }
                    ?>
                    <?php
                        if($halaman == $total_halaman){
                            echo "<li class='page-item disabled'><a class='page-link' href='#'>Next</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link' href='data-produk.php?halaman=$next'>Next</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
