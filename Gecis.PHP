<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <!-- Bootstrap CSS ekleme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hoş Geldiniz</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.sakarya.edu.tr">
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
        <div class="box form-box">
            <header>Hoş Geldiniz g231210561,</header>
            <p>Ana sayfaya yönlendiriliyorsunuz...</p>
            <a href="Bartu_Dönmez.HTML" class="buton links">Manuel olarak yönlendirme için tıklayınız.</a>
        </div>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "Bartu_Dönmez.HTML"; // Doğru sayfa adını kontrol edin
        }, 3000); // 3 saniye sonra otomatik yönlendirme
    </script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>