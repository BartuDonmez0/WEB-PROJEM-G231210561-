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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="field input">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">Şifre</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="buton" value="Giriş Yap">
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal" onclick="closeModal()">
        <div class="modal-content" onclick="event.stopPropagation()"> <!-- Bubbling'ı durdur -->
            <p>Girdiğiniz bilgiler yanlış. Lütfen tekrar deneyin.</p>
            <span class="close-button" onclick="closeModal()">&times;</span>
        </div>
    </div>
    <script>
        // Modalı kapat
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        // Arka plana tıklandığında modalı kapat
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
                // Yanlış bilgiler girildi, hata mesajı modalını göster
                echo "<script>document.getElementById('myModal').style.display='block';</script>";
            } else {
                // Doğru bilgiler girildi, kullanıcıyı karşılama sayfasına yönlendir
                header("Location: Gecis.php");
                exit();
            }
        }
    }
    ?>
</body>
</html>