<?php 
  require "koneksi.php";
  $queryProduk = mysqli_query($db, "SELECT * FROM menu ");
  $sql_makanan = "SELECT * FROM menu WHERE id_kategori = '1'";
  $query_makanan = mysqli_query($db, $sql_makanan);
  $sql_minuman = "SELECT * FROM menu WHERE id_kategori = '2'";
  $query_minuman = mysqli_query($db, $sql_minuman);
  $sql_lainnya = "SELECT * FROM menu WHERE id_kategori = '3'";
  $query_lainnya = mysqli_query($db, $sql_lainnya);
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
    <?php include "nav.php" ?>
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
        <div class="card">
          <div class="img-box">
            <img src="img/<?php echo $data_makanan['foto_menu'] ?>" alt="" />
          </div>
          <h2><?php echo $data_makanan['nama_menu'] ?></h2>
          <p><?php echo $data_makanan['deskripsi_menu'] ?></p>
          <h3>Rp. <?php echo $data_makanan['harga_menu'] ?></h3>
          <button type="submit">Add to Cart</button>
        </div>
  <?php } ?>
</div>
    <div class="kategorimenu">
      <h1>Minuman</h1>
    </div>
    <div class="container">
  <?php while($data_minuman = mysqli_fetch_array($query_minuman)){ ?>
        <div class="card">
          <div class="img-box">
            <img src="img/<?php echo $data_minuman['foto_menu'] ?>" alt="" />
          </div>
          <h2><?php echo $data_minuman['nama_menu'] ?></h2>
          <p><?php echo $data_minuman['deskripsi_menu'] ?></p>
          <h3>Rp. <?php echo $data_minuman['harga_menu'] ?></h3>
          <button>Add</button>
        </div>
      <?php } ?>
    </div>
    <div class="kategorimenu">
      <h1>Lainnya</h1>
    </div>
    <div class="container">
  <?php while($data_lainnya = mysqli_fetch_array($query_lainnya)){ ?>
        <div class="card">
          <div class="img-box">
            <img src="img/<?php echo $data_lainnya['foto_menu'] ?>" alt="" />
          </div>
          <h2><?php echo $data_lainnya['nama_menu'] ?></h2>
          <p><?php echo $data_lainnya['deskripsi_menu'] ?></p>
          <h3>Rp. <?php echo $data_lainnya['harga_menu'] ?></h3>
          <button>Add</button>
        </div>
      <?php } ?>
    </div>
  </body>
</html>