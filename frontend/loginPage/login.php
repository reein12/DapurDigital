<?php
session_start();
require '../config.php';

// Jika sudah login, arahkan ke dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: ../dashboard.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Simpan data login di session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];

            header("Location: ../dashboard.php");
            exit();
        } else {
            $error = "Password salah.";
        }
    } else {
        $error = "Email tidak ditemukan.";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head sama seperti sebelumnya -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c26cd2166c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dapur Digital - Login</title>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="left-section">
                <h1 class="title">Dapur Digital</h1>
                <p class="subtitle">Welcome Back! Please Login</p>
            </div>

            <div class="right-section">
                <form action="login.php" method="post">
                    <?php if (isset($error)): ?>
                        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
                    <?php endif; ?>

                    <input type="email" name="email" placeholder="Email" required value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
                    <input type="password" name="password" placeholder="Password" required>

                    <a href="#" class="forgot-password">Forgot Password?</a>

                    <button type="submit" class="login-btn">Login</button>

                    <p class="or-text">or Login with</p>

                    <p class="signup-text">Don't have an account? <a href="../registPage/regist.php">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
