<?php 
  require "koneksi.php";
  $queryProduk = mysqli_query($db, "SELECT id_menu, nama_menu, harga_menu,deskripsi_menu,foto_menu FROM menu LIMIT 6");
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
    <?php include "nav.html" ?>
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
  <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
        <div class="card">
          <div class="img-box">
            <img src="img/<?php echo $data['foto_menu'] ?>" alt="" />
          </div>
          <h2><?php echo $data['nama_menu'] ?></h2>
          <p><?php echo $data['deskripsi_menu'] ?></p>
          <h3>Rp. <?php echo $data['harga_menu'] ?></h3>
          <button>Add</button>
        </div>
      <?php } ?>
    </div>
    <div class="kategorimenu">
      <h1>Minuman</h1>
    </div>
    <div class="container">
      <div class="card">
        <div class="img-box">
          <img src="img/nasi_goreng.jpg" alt="" />
        </div>
        <h2>Es Teh</h2>
        <p>scjhcznc</p>
        <h3>Rp. 10.000</h3>
        <button>Add</button>
      </div>
    </div>
  </body>
  </html>