<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sayfası Sonucu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
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
                        <a class="nav-link" href="Bartu_Donmez.html">Hakkında</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="OzGecmis.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Memleketim.html">Memleketim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="IlgiAlanlarim.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Mirasimiz.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="IletisimSayfasi.html">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Bilinmiyor';
        $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Bilinmiyor';
        $phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : 'Bilinmiyor';
        $gender = isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : 'Bilinmiyor';
        $message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'Mesaj yok';
        $university = isset($_GET['university']) ? htmlspecialchars($_GET['university']) : 'Bilinmiyor';
        $confirm = isset($_GET['confirm']) && $_GET['confirm'] ? 'Onaylandı' : 'Onaylanmadı';
        $feedback = isset($_GET['feedback']) ? htmlspecialchars($_GET['feedback']) : 'Geri bildirim yok';

        echo "<div class='container my-5'>";
        echo "<h2>Gönderilen İletişim Bilgileri</h2>";
        echo "<p><strong>Ad:</strong> $name</p>";
        echo "<p><strong>E-Posta:</strong> $email</p>";
        echo "<p><strong>Telefon:</strong> $phone</p>";
        echo "<p><strong>Cinsiyet:</strong> $gender</p>";
        echo "<p><strong>Mesaj:</strong> $message</p>";
        echo "<p><strong>Üniversite:</strong> $university</p>";
        echo "<p><strong>Onay Durumu:</strong> $confirm</p>";
        echo "<p><strong>Sayfa Değerlendirmesi:</strong> $feedback</p>";
        echo "</div>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>