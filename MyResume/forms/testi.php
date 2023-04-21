


<?php
    include 'connection.php';
    $sql = "SELECT * FROM contact WHERE lower(`subject`) like '%testi%'";
    $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Testimonials</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/faviconGwen.ico" rel="icon" class="favIcon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   

</head>
<body>

    <div class='testimonials-slider swiper mx-auto' data-aos='fade-up' data-aos-delay='100'>
        <div class='swiper-wrapper mx-auto'>
            <?php
            include 'connection.php';
            include 'jsonDBtesti.php';
            
            $data = json_decode($hasil_json, true);
            
      
              foreach ($data as $item) {
                echo "<div class='swiper-slide'>";
                echo "<div class='testimonial-item'>";
                echo "<h3>" . $item["name"] . "</h3>";
                echo "<h4>" . $item["email"] . "</h4>";
                echo "<p>";
                echo "<i class='bx bxs-quote-alt-left quote-icon-left'></i>";
                echo $item["message"];
                echo "<i class='bx bxs-quote-alt-right quote-icon-right'></i>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
              }
            ?>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/typed.js/typed.min.js"></script>
    <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>
</html>

