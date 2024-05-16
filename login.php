<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Giriş Hatası</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://www.sakarya.edu.tr" target="_blank">
            <img src="css/logo-sakarya-universitesi.png" alt="LOGO" title="Sakarya Üniversitesi Logosudur" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hakkinda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OzGecmis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Memleketim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ilgi Alanlarim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mirasimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <!-- Navigation items -->
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card text-center">
                <div class="card-header">Giriş Hatası</div>
                <div class="card-body">
                    <?php
                    session_start();
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

                        $correct_email = "g231210561@sakarya.edu.tr";
                        $correct_password = "g231210561";

                        if ($email === $correct_email && $password === $correct_password) {
                            header("Location: Gecis.php");
                            exit;
                        } else {
                            echo '<p class="alert alert-danger">E-mail veya şifre yanlış. Lütfen tekrar deneyin.</p>';
                            echo '<script>setTimeout(function(){ window.location.href = "index.html"; }, 3000);</script>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
