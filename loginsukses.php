<?php
session_start();
$commentError = '';
$isFormValid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = ($_POST['comment']);
    if (empty($comment)) {
        $commentError = 'Komentar harus diisi!';
        $isFormValid = false;
    }

    if ($isFormValid) {
        $_SESSION['bukutamu'] = [
            'email' => $_SESSION['email'],
            'nama' => $_SESSION['nama'],
            'comment' => $comment
        ];
        header('Location: loginsukses.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" type="text/css" href="baru.css">
    
</head>
<body>

<div class="bukutamu-form">
    <form method = 'post'>
    <h2>Buku Tamu</h2>
        <div class="input-field">
        <div class="input-field">
            <label for="comment">Komentar:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            <div class="error"><?php echo $commentError; ?></div>
        </div>
        <button type="submit" class="submit-button">Kirim</button>
        
    </form>

    <?php
    if (isset($_SESSION['bukutamu'])) {
        echo '<p>Nama : ' . ($_SESSION['bukutamu']['nama']) . '</p>';
       
        echo '<p>Email : ' . ($_SESSION['bukutamu']['email']) . '</p>';
        
        echo '<p>Komentar: ' . ($_SESSION['bukutamu']['comment']) . '</p>';
        unset($_SESSION['bukutamu']);
    }
    ?>
</div>

</body>
</html>
