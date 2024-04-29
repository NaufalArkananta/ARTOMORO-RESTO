<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTOMORO</title>
    <link rel="stylesheet" href="css/indekstyle.css">
</head>
<body>
    <?php include "nav.php" ?>

    <!-- Pencarian and banner -->

    <div class="container-pencarian">
        <h2>Mau Cari Apa?</h2>
        <form action="" method="$_POST">
            <input type="text" placeholder="Masukan menu yang mau di cari...">
            <input type="submit" value="Cari" >
        </form>
    </div>

    <!-- About Us -->

    <div class="Container-About">
        <div class="about-us" id="about-us">
            <h1>Tentang Kami</h1>
            <p>    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo faucibus luctus. In nunc nisi, vehicula vitae felis et, molestie dignissim purus. Nam pharetra enim sem, at condimentum massa ultricies non. Nulla placerat lorem vitae purus accumsan blandit. Quisque vitae lacus ut orci tincidunt consectetur quis a elit. Suspendisse mauris dolor, porta ut nunc ac, varius sodales tortor. Donec sit amet nibh magna. Sed sit amet erat rutrum, condimentum mauris eget, sagittis lectus. Integer aliquet maximus vestibulum. Praesent ac magna ac ante pretium vulputate vitae et nulla. Ut eget auctor urna. Nam placerat faucibus interdum. </p>
        </div>
    </div>

    <!-- Card Rekomendasi -->
    <div class="judul">
        <h2>Rekomendasi Makanan</h2>
        <a href="menu.php"><h2>Lainnya</h2></a>
    </div>
    <div class="container-card">
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_goreng.jpg"\ alt="" />
            </div>
            <h2>Nasi Goreng</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/mie_goreng.jpg"\ alt="" />
            </div>
            <h2>Mie Goreng</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/mie_kuah.jpg"\ alt="" />
            </div>
            <h2>Mie Kuah</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_pecel.jpg"\ alt="" />
            </div>
            <h2>Nasi Pecel</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_goreng.jpg"\ alt="" />
            </div>
            <h2>Nasi Goreng</h2>
        </div>
    </div>

    <div class="judul">
        <h2>Rekomendasi Minuman</h2>
        <a href="menu.php"><h2>Lainnya</h2></a>
    </div>
    <div class="container-card">
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_goreng.jpg"\ alt="" />
            </div>
            <h2>Nasi Goreng</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_goreng.jpg"\ alt="" />
            </div>
            <h2>Nasi Goreng</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_goreng.jpg"\ alt="" />
            </div>
            <h2>Nasi Goreng</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_goreng.jpg"\ alt="" />
            </div>
            <h2>Nasi Goreng</h2>
        </div>
        <div class="card">
            <div class="img-box">
                <img src="img/nasi_goreng.jpg"\ alt="" />
            </div>
            <h2>Nasi Goreng</h2>
        </div>
    </div>
    
    <?php include "footer.php" ?>
</body>
</html>