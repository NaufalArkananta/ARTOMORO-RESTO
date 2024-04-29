<?php 
  require "koneksi.php";
  include "nav.php";
  $queryProduk = mysqli_query($db, "SELECT * FROM menu ");
  $sql_makanan = "SELECT * FROM menu WHERE id_kategori = '1'";
  $query_makanan = mysqli_query($db, $sql_makanan);
  $sql_minuman = "SELECT * FROM menu WHERE id_kategori = '2'";
  $query_minuman = mysqli_query($db, $sql_minuman);
  $sql_lainnya = "SELECT * FROM menu WHERE id_kategori = '3'";
  $query_lainnya = mysqli_query($db, $sql_lainnya);

  if (isset($_POST['add_to_cart'])){
    $nama_menu=$_POST['nama_menu'];
    $harga_menu=$_POST['harga_menu'];
    $foto_menu=$_POST['foto_menu'];
    $id_pelanggan= $_SESSION['id_pelanggan'];

    $cek_keranjang=mysqli_query($db,"SELECT * FROM keranjang WHERE nama_menu='$nama_menu' AND id_pelanggan='$id_pelanggan'");
    $row_count = mysqli_num_rows($cek_keranjang);

    if($row_count>0){
      $update_quantity=mysqli_query($db, "UPDATE keranjang SET quantity = quantity +1 WHERE nama_menu='$nama_menu' AND id_pelanggan = '$id_pelanggan'");
    }

    else{
      $insert_to_cart=mysqli_query($db, "INSERT INTO keranjang (nama_menu,harga_menu,quantity,foto_menu,id_pelanggan) VALUES ('$nama_menu',$harga_menu,1,'$foto_menu','$id_pelanggan')");
      echo "<script> 
      alert('Menu berhasil ditambahkan')
      </script>";
    }


  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu ARTOMORO</title>
    <link rel="stylesheet" href="css/stylemenu.css">
</head>
<body>
    <!-- img slider start -->
    <div class="banner">
      <div class="slider">
        <div class="slides">
          <!-- radio buttons start -->
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
          <!-- radio buttons end -->
          <!-- slide image start -->
          <div class="slide first">
            <img src="img/nasi_goreng.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="img/mie_goreng.jpg" alt="" />
          </div>
          <div class="slide">
            <img src="img/nasi_pecel.jpg" alt="" />
          </div>
          <!-- slide image end -->
          <!-- automatic navigation start -->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
          </div>
          <!-- automatic navigation end -->
        </div>
        <!-- manual navigation start -->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
        </div>
        <!-- manual navigation end -->
      </div>
      <!-- img slider end -->
    </div>

    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 3) {
          counter = 1;
        }
      }, 5000);
      </script>

<div class="kategorimenu">
  <h1>Makanan</h1>
</div>
<div class="container">
  <?php while($data_makanan = mysqli_fetch_array($query_makanan)){ ?>
    <form method="POST" action="">
      <div class="card">
        <div class="img-box">
          <img src="img/<?php echo $data_makanan['foto_menu'] ?>" alt="" />
        </div>
        <h2><?php echo $data_makanan['nama_menu'] ?></h2>
        <p><?php echo $data_makanan['deskripsi_menu'] ?></p>
        <h3>Rp. <?php echo $data_makanan['harga_menu'] ?></h3>
        <input type="hidden" name = "nama_menu" value="<?php echo $data_makanan['nama_menu'] ?>">
        <input type="hidden" name = "harga_menu" value="<?php echo $data_makanan['harga_menu'] ?>">
        <input type="hidden" name = "foto_menu" value="<?php echo $data_makanan['foto_menu'] ?>">
        <button type="submit" name ="add_to_cart">Add to Cart</button>
      </div>
    </form>
  <?php } ?>
</div>
    <div class="kategorimenu">
      <h1>Minuman</h1>
    </div>
    <div class="container">
  <?php while($data_minuman = mysqli_fetch_array($query_minuman)){ ?>
    <form method="POST" action="">
      <div class="card">
        <div class="img-box">
          <img src="img/<?php echo $data_minuman['foto_menu'] ?>" alt="" />
        </div>
        <h2><?php echo $data_minuman['nama_menu'] ?></h2>
        <p><?php echo $data_minuman['deskripsi_menu'] ?></p>
        <h3>Rp. <?php echo $data_minuman['harga_menu'] ?></h3>
        <input type="hidden" name = "nama_menu" value="<?php echo $data_minuman['nama_menu'] ?>">
        <input type="hidden" name = "harga_menu" value="<?php echo $data_minuman['harga_menu'] ?>">
        <input type="hidden" name = "foto_menu" value="<?php echo $data_minuman['foto_menu'] ?>">
        <button type="submit" name ="add_to_cart">Add to Cart</button>
      </div>
    </form>
  <?php } ?>
    </div>
    <div class="kategorimenu">
      <h1>Lainnya</h1>
    </div>
    <div class="container">
  <?php while($data_lainnya = mysqli_fetch_array($query_lainnya)){ ?>
    <form action="" method="POST">
      <div class="card">
        <div class="img-box">
          <img src="img/<?php echo $data_lainnya['foto_menu'] ?>" alt="" />
        </div>
        <h2><?php echo $data_lainnya['nama_menu'] ?></h2>
        <p><?php echo $data_lainnya['deskripsi_menu'] ?></p>
        <h3>Rp. <?php echo $data_lainnya['harga_menu'] ?></h3>
        <input type="hidden" name = "nama_menu" value="<?php echo $data_lainnya['nama_menu'] ?>">
        <input type="hidden" name = "harga_menu" value="<?php echo $data_lainnya['harga_menu'] ?>">
        <input type="hidden" name = "foto_menu" value="<?php echo $data_lainnya['foto_menu'] ?>">
        <button type="submit" name ="add_to_cart">Add to Cart</button>
      </div>
    </form>
  <?php } ?>
    </div>
    <?php include"footer.php" ?>
  </body>
</html>