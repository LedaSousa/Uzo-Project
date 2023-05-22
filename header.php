<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UZO</title>
    <?php

    if (!isset($_SESSION)) {
        session_start();
    }
    ?>


    <!-- MDB icon -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/header.css">


</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>

            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
                    <img src="assets/images/Uzo.png" height="50" alt="UZO Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="phone.php" style="color:black;"> <i class="bi bi-phone"></i>Telemóveis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acessory.php" style="color:black;"> <i class=" bi bi-headphones"></i>Acessórios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tarifario.php" style="color:black;"><i class="bi bi-currency-euro"></i>Tarifário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Tvnetvoz.php" style="color:black;"><i class="bi bi-tv"></i> Tv Net Voz</a>
                    </li>

                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <!-- <a class="text-reset me-3" href="index.php">
                    <i class="fas fa-shopping-cart"></i>
                </a> -->
                <!-- <a class="nav-link" href="login.php"><i class="bi bi-person fa-2x"></i></a> -->


                <?php



                if (!isset($_SESSION["my_uzo"])) {
                    echo '<a class="text-reset me-3" href="login.php"><i class="fas fa-user"></i></a>';
                } else {
                    echo '<a class="text-reset me-3" href="myuzo.php"><i class="fas fa-id-card"></i></a>';
                    echo '<a class="text-reset me-3" href="logout.php"><i class="fas fa-sign-out"></i></a>';
                }

                ?>




            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

</body>


</html>