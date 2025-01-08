<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header with Toggle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/stylez.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/stylex.css">
    <link rel="stylesheet" href="assets/css/indian.css">
    <link rel="stylesheet" href="assets/css/chinese.css">

   
</head>
<body>
    <header class="header py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a href="#" class="logo"><img src="./Images/6.png"></a>

            <!-- Navigation Links -->
            <ul class="nav-links">
                
                <li><a href="dish.php">HOME</a></li>
                <li><a href="indian.php">INDIAN</a></li>
                <li><a href="chinese.php">CHINESE</a></li>
                <li><a href="italian.php">ITALIAN</a></li>
                <li><a href="Japanese.php">JAPANESE</a></li>
            </ul>

            <!-- Social Media Icons -->
            <div class="social-icons d-none d-md-flex">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-google"></i></a>

            </div>

            <!-- Menu Toggle for Mobile -->
            <div class="menu-toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>



      <script>
        // Toggle navigation menu on mobile
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>


</body>
</html>