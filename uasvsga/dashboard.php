<?php
include "koneksi.php";

$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Kamar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href="#"><img src="asset/logo-white.png" class="hitam" alt="Logo" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="booking.php#rooms">Rooms</a></li>
                    <li><a href="index.php#gallery">Visual</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="layar-full">
        <header id="home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="asset/Hotel Cinematic.mp4" type="video/mp4" />
            </video>
            <div class="intro">
                <h3>Travel Indonesia</h3>
                <p>Temukan kenyamanan dan layanan terbaik di sini!</p>
            </div>
        </header>
    </div>

    <h2>Daftar Pemesanan</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Pemesan</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Identitas</th>
                <th>Tipe Kamar</th>
                <th>Tanggal Pesan</th>
                <th>Durasi Menginap</th>
                <th>Termasuk Breakfast</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['nomor_identitas']; ?></td>
                    <td><?php echo $row['tipe_kamar']; ?></td>
                    <td><?php echo $row['tanggal_pesan']; ?></td>
                    <td><?php echo $row['durasi_menginap']; ?> Hari</td>
                    <td><?php echo $row['termasuk_breakfast'] == 1 ? 'Ya' : 'Tidak'; ?></td>
                    <td>Rp <?php echo number_format($row['total_bayar'], 0, ',', '.'); ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
} else {
    echo "Tidak ada pemesanan.";
}
?>

<div class="bg-light text-center py-3">
            <div class="copyright">&copy; 2024 Travels Indonesia  VSGA Ahmad Kurtubi</div>
        </div>

    <script src="script.js"></script>
</body>
</html>