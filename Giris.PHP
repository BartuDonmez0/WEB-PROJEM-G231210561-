<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <!-- Bootstrap CSS ekleme linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Giriş Sayfasi</title>
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
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8"> <!-- Genişlik artırıldı -->
            <div class="card text-center"> <!-- Text center eklendi -->
                <div class="card-header">
                    GİRİŞ
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" required autofocus autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Şifre</label>
                            <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-primary" name="submit" value="Giriş Yap">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Modal -->
    <div id="myModal" class="modal" onclick="closeModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <p>Girdiğiniz bilgiler yanliş. Lütfen tekrar deneyin.</p>
            <span class="close-button" onclick="closeModal()">&times;</span>
        </div>
    </div>
    <script>
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }
        window.onclick = function(event) {
            var modal = document.getElementById('myModal');
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        $correct_email = "g231210561@sakarya.edu.tr";
        $correct_password = "g231210561";

        if (!empty($email) && !empty($password)) {
            if ($email !== $correct_email || $password !== $correct_password) {
                echo "<script>document.getElementById('myModal').style.display='block';</script>";
            } else {
                header("Location: Gecis.php");
                exit();
            }
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>