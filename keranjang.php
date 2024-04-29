<?php
    include"nav.php";
    include "koneksi.php";
    $id_pelanggan= $_SESSION['id_pelanggan'];
    $sqlCart="SELECT * FROM keranjang WHERE id_pelanggan='$id_pelanggan' ";
    $queryCart=mysqli_query($db, $sqlCart);

    if(isset($_POST['+'])){
        $id_menu = $_POST['id_menu'];
        $updateQuantity = mysqli_query($db,"UPDATE keranjang SET quantity = quantity + 1 WHERE id_pelanggan = $id_pelanggan AND id_keranjang = $id_menu");
        header("location:keranjang.php");
    }

    elseif(isset($_POST['-'])){
        $id_menu = $_POST['id_menu'];
        $updateQuantity = mysqli_query($db,"UPDATE keranjang SET quantity = quantity - 1 WHERE id_pelanggan = $id_pelanggan AND id_keranjang = $id_menu");
        header("location:keranjang.php");
    }
  
    elseif(isset($_POST['delete'])){
        $id_menu = $_POST['id_menu'];
        $updateQuantity = mysqli_query($db,"DELETE FROM keranjang WHERE id_keranjang = $id_menu AND id_pelanggan = $id_pelanggan ");
        header("location:keranjang.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <h1>Pesanan Saya</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Quantity</th>
                <th>Jumlah</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data_cart=mysqli_fetch_array($queryCart) ){ ?>
                <form action="" method="post">
                    <tr>
                        <div class="nama-menu">
                            <td><img src="img/<?php echo $data_cart['foto_menu'] ?>" alt="Produk 1"><h3><?php echo $data_cart['nama_menu'] ?></h3></td>
                            <td>Rp.<?php echo $data_cart['harga_menu'] ?></td>
                        </div>
                        <td><button name="+">+</button><span><?php echo $data_cart['quantity'] ?></span><button name="-">-</button>
                        <input type="hidden" name="id_menu" value="<?php echo $data_cart['id_keranjang'] ?>"></td>
                        <td>Rp.<?php echo ($data_cart['harga_menu'] * $data_cart['quantity'] )?></td>
                        <td><button name="delete">Hapus</button></td>
                    </tr>
                </form>
            <?php } ?>
        </tbody>
    </table>
    <div class="grand-total">
        <h3>Total Pembayaran : </h3>
    </div>
</body>
</html>