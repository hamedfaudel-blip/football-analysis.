<?php
require 'db_connect.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
   
    // Vérification simple (Pour la prod, utilisez password_verify)
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$user, $pass]);
    $user_data = $stmt->fetch();

    if ($user_data) {
        $_SESSION['user_id'] = $user_data['id'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body style="display:flex; justify-content:center; align-items:center; height:100vh;">
    <div class="container" style="max-width:400px; text-align:center;">
        <h2>Connexion</h2>
        <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Nom d'utilisateur (admin)" required>
            <input type="password" name="password" placeholder="Mot de passe (admin)" required>
            <br><br>
            <button type="submit" name="login" class="btn">Se connecter</button>
        </form>
    </div>
</body>
</html>