<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indonesia Tourism</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css" />
</head>
<body>
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href="#"><img src="asset/logo-white.png" class="hitam" alt="Logo" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#gallery">Visual</a></li>
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

    <main class="container my-5">
        <section id="rooms">
            <h2 class="text-center mb-4">Rooms</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="asset/Standar.jpg" class="card-img-top" alt="Kamar Standar">
                        <div class="card-body">
                            <h3 class="card-title">Standard Room</h3>
                            <p class="card-text">Fasilitas:<br>
                                Tempat tidur queen atau twin<br>
                                AC dan pemanas<br>
                                TV kabel<br>
                                Wi-Fi gratis<br>
                                Kamar mandi dengan perlengkapan mandi</p>
                            <p class="card-text"><br><br><br><br>Harga: Rp. 500.000/Malam</p>
                            <a href="booking.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="asset/deluxe.jpg" class="card-img-top" alt="Kamar Deluxe">
                        <div class="card-body">
                            <h3 class="card-title">Deluxe Room</h3>
                            <p class="card-text">Fasilitas:<br>
                                Tempat tidur king<br>
                                AC dan pemanas<br>
                                TV LED dengan saluran internasional<br>
                                Minibar dan mesin pembuat kopi<br>
                                Wi-Fi gratis<br>
                                Kamar mandi dengan shower dan perlengkapan mandi premium</p>
                            <p class="card-text"><br><br>Harga: Rp. 800.000/Malam</p>
                            <a href="booking.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="asset/Executive.jpg" class="card-img-top" alt="Kamar Executive">
                        <div class="card-body">
                            <h3 class="card-title">Executive Room</h3>
                            <p class="card-text">Fasilitas:<br>
                                Tempat tidur king <br>
                                AC dan pemanas<br>
                                TV pintar dengan akses streaming<br>
                                Minibar, mesin pembuat kopi<br>
                                makanan ringan gratis<br>
                                Akses ke lounge bisnis<br>
                                Wi-Fi cepat dan gratis<br>
                                Kamar mandi dengan bathtub <br>
                                perlengkapan mandi mewah</p>
                            <p class="card-text">Harga: Rp. 1.200.000/Malam</p>
                            <a href="booking.php" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="container my-5">
        <section id="gallery">
            <h2 class="text-center">Visual Journey</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <video class="card-img-top" controls>
                            <source src="asset/Hotel Cinematic.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h5 class="card-title">Standard Room</h5>
                            <p class="card-text">Kamar Standar dirancang untuk memberikan kenyamanan dan kepraktisan. Dilengkapi dengan tempat tidur queen atau twin, kamar ini memiliki dekorasi yang sederhana namun menarik. Fasilitas termasuk AC, TV kabel, dan akses Wi-Fi gratis. Cocok yang mencari akomodasi yang nyaman dengan harga terjangkau.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <video class="card-img-top" controls>
                            <source src="asset/Hotel Cinematic.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h5 class="card-title">Deluxe Room</h5>
                            <p class="card-text">Kamar Deluxe menawarkan suasana yang lebih mewah dengan ruang yang lebih luas. Dihiasi dengan furnitur modern dan warna yang menenangkan, kamar ini dilengkapi dengan fasilitas premium. Tamu dapat menikmati pemandangan indah dari jendela besar, serta fasilitas tambahan seperti minibar dan mesin pembuat kopi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <video class="card-img-top" controls>
                            <source src="asset/Hotel Cinematic.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h5 class="card-title">Standard Room</h5>
                            <p class="card-text">Kamar Executive dirancang khusus untuk pelancong bisnis atau tamu yang menginginkan pengalaman menginap yang luar biasa. Dengan desain yang elegan dan fasilitas lengkap, kamar ini menawarkan kenyamanan maksimal. Tamu mendapatkan akses eksklusif ke lounge bisnis serta layanan concierge pribadi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer id="contact" class="bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <h5>Travels Indonesia</h5>
                    <p>Jl. Gading Serpong Boulevard Barat Blok S No.5 Gading Serpong Tangerang, Banten Indonesia 15810</p>
                </div>
                <div class="col-md-3">
                    <h5>Contact</h5>
                    <p>
                        <img src="asset/pngtree-instagram-icon-png-image_6315974.png" width="15" alt="Instagram"> 
                        <a href="https://www.instagram.com/ahmdkurtubii?igsh=enB1ZnhjOTVxZjdi"> @ahmdkurtubii </a>
                    </p>
                    <p>
                        <img src="asset/sm_5b321c99945a2.jpg" width="15" alt="Phone"> 081318275235
                    </p>
                    <p>
                        <img src="asset/images.jpeg" width="15" alt="Email"> 
                        <a href="mailto:ahmadqurtubi4896@gmail.com">ahmadqurtubi4896@gmail.com</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Useful Links</h5>
                    <p>Faq</p>
                    <p>Download Catalog</p>
                    <p>Privacy Policy</p>
                    <p>Cookie Policy</p>
                </div>
                <div class="col-md-3">
                    <h5>Sitemap</h5>
                    <p>Home</p>
                    <p>Rooms</p>
                    <p>Visual</p>
                    <p>Contact</p>
                    <p>Order List </p>
                </div>
            </div>
        </div>
        <div class="bg-light text-center py-3">
            <div class="copyright">&copy; 2024 Travels Indonesia  VSGA Ahmad Kurtubi</div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
