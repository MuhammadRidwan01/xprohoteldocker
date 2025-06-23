<!DOCTYPE html>
<?php
include('admin/proses/koneksi.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xprohotel - Luxury Hotel Experience</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('admin/uploadsvaleriia-bugaiova-_pPHgeHz1uk-unsplash.jpg');
            background-size: cover;
            background-position: center;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
        }
        .feature-card {
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .room-card {
            margin-bottom: 2rem;
        }
        .room-card img {
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Xprohotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rooms">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#amenities">Amenities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container text-center">
            <h1 class="display-4">Welcome to Xprohotel</h1>
            <p class="lead">Hotel Management System</p>
            <a href="/admin/" class="btn btn-primary btn-lg">Admin Login</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="amenities" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Amenities</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-swimming-pool fa-3x mb-3"></i>
                        <h3>Swimming Pool</h3>
                        <p>Enjoy our luxurious infinity pool with stunning views</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-utensils fa-3x mb-3"></i>
                        <h3>Fine Dining</h3>
                        <p>Experience world-class cuisine at our restaurants</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-spa fa-3x mb-3"></i>
                        <h3>Spa & Wellness</h3>
                        <p>Rejuvenate your body and mind at our spa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section id="rooms" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Rooms</h2>
            <div class="row">
                <?php
                $result = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_kamar");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-md-4">
                            <div class="card room-card">
                                <img src="<?php echo $row['gambar']; ?>" class="card-img-top" alt="<?php echo $row['jenis_kamar']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['jenis_kamar']; ?></h5>
                                    <p class="card-text"><?php echo nl2br($row['keterangan']); ?></p>
                                    <p class="card-text"><strong>Price: Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></strong></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<div class='col-12 text-center'><p>No rooms available at the moment.</p></div>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="pesan" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="p-4">
                        <h4>Contact Information</h4>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Hotel No. 123, Jakarta</p>
                        <p><i class="fas fa-phone"></i> +62 21 1234 5678</p>
                        <p><i class="fas fa-envelope"></i> info@xprohotel.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Xprohotel</h5>
                    <p>Experience luxury and comfort at its finest.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5>Follow Us</h5>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; <?php echo date('Y'); ?> Xprohotel. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
mysqli_close($koneksi);
?>
