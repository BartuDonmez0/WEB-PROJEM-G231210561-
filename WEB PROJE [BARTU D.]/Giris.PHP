<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>Giriş Sayfasi</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>GİRİŞ</header>
            <!-- Formunuz, sunucu tarafında işlem yapılacak dosyaya yönlendirilecek -->
            <form action="Gecis.php" method="post">
                <div class="field input">
                    <label for="E-mail">E-mail</label>
                    <!-- HTML5 e-mail doğrulaması kullanılmış -->
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="Sifre">Şifre</label>
                    <!-- Şifre alanı için HTML5 doğrulaması -->
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <!-- Giriş yap butonu -->
                    <input type="submit" name="submit" class="buton" value="Giriş Yap">
                </div>
            </form>
        </div>
    </div>
    <?php
// Kullanıcı formdan bilgi gönderdi mi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Doğru kullanıcı bilgileri
    $correct_email = "g231210561@sakarya.edu.tr";
    $correct_password = "g231210561";

    // Giriş bilgilerini kontrol et
    if ($email == $correct_email && $password == $correct_password) {
        // Doğru bilgiler girildi, kullanıcıyı karşılama sayfasına yönlendir
        header("Location: Gecis.php");
        exit();
    } else {
        // Yanlış bilgiler girildi, hata mesajı göster
        echo "<script>alert('Girdiğiniz bilgiler yanlış, lütfen doğru bilgileri girin.'); window.history.back();</script>";
    }
}
?>
</body>
</html>