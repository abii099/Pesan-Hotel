<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jenisKelamin = $_POST['jenis_kelamin'];
        $nomorIdentitas = $_POST['nomor_identitas'];
        $tipeKamar = $_POST['tipe_kamar'];
        $tanggalPesan = $_POST['tanggal_pesan'];
        $durasiMenginap = $_POST['durasi_menginap'];
        $termasukBreakfast = isset($_POST['termasuk_breakfast']) ? 1 : 0;

        if (strlen($nomorIdentitas) != 16) {
            echo "Nomor Identitas harus 16 digit.";
            exit;
        }

        $hargaKamar = 0;
        switch ($tipeKamar) {
            case 'Standar':
                $hargaKamar = 500000;
                break;
            case 'Deluxe':
                $hargaKamar = 1000000;
                break;
            case 'Executive':
                $hargaKamar = 1200000;
                break;
        }
        
        $totalBayar = $hargaKamar * $durasiMenginap;
    if ($durasiMenginap > 3) {
        $totalBayar *= 0.9; 
    }
    if ($termasukBreakfast) {
        $totalBayar += 80000; 
    }

        include "koneksi.php";
        $query = "INSERT INTO bookings (nama, jenis_kelamin, nomor_identitas, tipe_kamar, tanggal_pesan, durasi_menginap, termasuk_breakfast, total_bayar) VALUES ('$nama', '$jenisKelamin', '$nomorIdentitas', '$tipeKamar', '$tanggalPesan', '$durasiMenginap', '$termasukBreakfast', '$totalBayar')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Pemesanan berhasil disimpan!";
        } else {
            echo "Gagal menyimpan pemesanan.";
        }
    }
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
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="index.php#gallery">Visual</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="dashboard.php">Order List </a></li>
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

    <main class=" container mb-4">
        <section id="booking-form" class="p-5 bg-light rounded shadow-sm">
            <h2>Form Pemesanan</h2>
            <form action="booking.php" method="post">
                <div>
                    <label for="nama">Nama Pemesan:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
                <div>
                    <label for="nomor_identitas">Nomor Identitas:</label>
                    <input type="text" id="nomor_identitas" name="nomor_identitas" required>
                </div>
                <div>
                    <label for="tipe_kamar">Tipe Kamar:</label>
                    <select id="tipe_kamar" name="tipe_kamar" required>
                        <option value="Standar">Standar</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Executive">Executive</option>
                    </select>
                </div>
                <div>
                    <label for="tanggal_pesan">Tanggal Pesan:</label>
                    <input type="date" id="tanggal_pesan" name="tanggal_pesan" required>
                </div>
                <div>
                    <label for="durasi_menginap">Durasi Menginap:</label>
                    <input type="number" id="durasi_menginap" name="durasi_menginap" required>
                    <span>Hari</span>
                </div>
                <div>
                    <label for="termasuk_breakfast">Termasuk Breakfast:</label>
                    <input type="checkbox" id="termasuk_breakfast" name="termasuk_breakfast">
                    <label for="termasuk_breakfast">Ya</label>
                </div>
                <div>
                    <label for="total_bayar">Total Bayar:</label>
                    <input type="text" id="total_bayar" name="total_bayar" readonly>
                </div>
                <button type="button" id="hitung-total">Hitung Total Bayar</button>
                <button type="submit" name="submit">Simpan</button>
            </form>
        </section>
    </main>
    

 <div class="bg-light text-center py-3">
            <div class="copyright">&copy; 2024 Travels Indonesia  VSGA Ahmad Kurtubi</div>
        </div>

    <script src="script.js"></script>
</body>
</html>