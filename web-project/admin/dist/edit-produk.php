    <?php
      include "sidebar.php";
      require_once "connection.php";
      $sql = "select * from kategori";
      $query = mysqli_query($conn, $sql);
      $kat = [];
      $id_kat = [];
      while($data = mysqli_fetch_array($query)){
        array_push($kat, $data["nama_kategori"]);
        array_push($id_kat, $data["id_kategori"]);
      }
      if($_GET["status"] == "edit"){
        // Code here
        $title = "Edit Produk";

        $id_produk = $_GET["id_produk"];
        $sql = "SELECT * FROM produk inner join kategori on produk.id_kategori = kategori.id_kategori inner join gambar on produk.id_produk = gambar.id_produk inner join ukuran on gambar.id_produk = ukuran.id_produk where produk.id_produk='$id_produk'";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($query);

        $id_kategori = $data["id_kategori"];
        $nama_barang = $data["nama_barang"];
        $warna = $data["warna"];
        $bahan = $data["bahan"];
        $harga = $data["harga"];
        $stok = $data["stok"];
        $keterangan = $data["keterangan"];
        $best_seller = $data["best_seller"];

        
      }else{
        // Code here
        $title = "Tambah Produk";

        $id_kategori = "";
        $nama_barang = "";
        $warna = "";
        $bahan = "";
        $harga = "";
        $stok = "";
        $keterangan = "";
        $best_seller = "";
      }
      
    ?>
    <div class="container-fluid">
      <div class="card my-4">
        <div class="card-header">
          <h1><?php echo $title; ?></h1>
        </div>
        <div class="card-body">
          <form action="edit-produk-process.php" method="POST">
            <div class="input-group mb-3 w-50">
              <span class="input-group-text">Kategori</span>
              <select name="kategori" id="" class="custom-select" required>
                <option value="#">-- Masukkan kategori produk --</option>
                <?php
                  for($i=0; $i<count($id_kat); $i++){
                    $selected = $id_kategori != "" ? "selected": "";
                    echo "<option value='$id_kat[$i]' $selected>$kat[$i]</option>";
                  }
                ?>
              </select>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Nama Produk</span>
              <input type="text" class="form-control" placeholder="Masukkan nama produk" maxlength="70" value="<?php echo $nama_barang; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Warna</span>
              <input type="text" class="form-control" placeholder="Masukkan warna" maxlength="30" value="<?php echo $warna; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Bahan</span>
              <input type="text" class="form-control" placeholder="Masukkan bahan pakaian" maxlength="30" value="<?php echo $bahan; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Harga</span>
              <input type="number" class="form-control" placeholder="Masukkan harga/pcs" maxlength="8" value="<?php echo $harga; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Stok</span>
              <input type="text" class="form-control" placeholder="Masukkan stok produk" maxlength="11" value="<?php echo $stok; ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Keterangan</span>
              <textarea name="keterangan" id="" cols="30" rows="10" placeholder="Masukkan keterangan produk (boleh dikosongi)" class="form-control"><?php echo $keterangan; ?></textarea>
            </div>
            <div class="input-group mb-3 ml-4">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="best-seller" <?php if($best_seller == 1) echo "checked"; ?>>
                <label for="best-seller" class="custom-control-label" >Best Seller</label>
              </div>
            </div>
            <div class="mb-3 custom-file w-50">
              <label for="formFileMultiple" class="custom-file-label">Masukkan Foto</label>
              <input class="custom-file-input" type="file" id="formFileMultiple">
            </div>
            <button class="btn btn-dark" type="submit" style="width: 100%;">Submit</button>
          </form> 
        </div>
      </div>
    </div>
<?php include 'footer.php' ?>