<!DOCTYPE html>
 <html> 
<head>
    <title>Login</title> 
    <link rel="stylesheet" type="text/css" href="baru.css"> 
</head> 
<body> 
<div align="center" class="container"> 
    <?php  
    if(isset($_GET["login_gagal"])){ 
    ?> 
    <div class="notifikasi">login gagal! <br> Email atau Password salah</div>
    <?php 
} 
?> 
    <div class="login-form"> 
    <form method="post" action="validasi.php"> 
        <div class="input"> 
            <div> <input type="email" class="element-input" name="Email" placeholder="Email" required> </div>
        </div> 
        <div class="input"> 
            <div> <input type="password" class="element-input" name="password" placeholder="Password" required> </div> 
        </div> 
        <div class="input"> 
            <div align="right"> <button type="submit" name="login" class="button-login">Login</button> </div> 
        </div> 
    </form>
    </div> 
        <br> 
</div> 
</body> 
</html> 