<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aditibri</title>
    <script src="https://kit.fontawesome.com/7979dba5e8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Styles/loginstyle.css">
    <link rel="stylesheet" href="../Styles/publicview.css">

</head>

<body>
    <header class="cabeza">
        <img class="logo" src="../Images/logoADITIBRI.jpg" alt="logo aditibri">
    </header>
    
    <section class="contenedor">
        <div class="center">
            <h1>Sign in</h1>

            <form action="../business/useraction.php" method="POST">
                <div class="text_field">
                    <input type="text" required placeholder="Username" name="username">

                </div>
                <br>
                <div class="text_field">
                    <input type="password" required placeholder="Password" name="password">
                </div>
                <br>
                <input type="submit" value="Login" name="entrar">
                <div class="pass">Forgot Password?</div>
            </form>
        </div>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "userinvalid") {
                echo '<p style="color: black">Datos Incorrectos,vuelva intentar!</p>';
            }
            if ($_GET['error'] == "emptyField") {
                echo '<p style="color: black">Campo(s) vacio(s)</p>';
            }
        }

        ?>
    </section>
    
    <footer>
        <ul>
            <li><img class="img1" src="../Images/logoADITIBRI.jpg" alt=""></li>

            <li>
                <p class="p_title">ADITIBRI TALAMANCA</p>
                <p class="p_item"><a href="./redirect.php">¿Quienes somos?</a></p>
            </li>

            <li>
                <p class="p_title">Contacto</p>
                <p class="p_item">
                    <i class="far fa-envelope"></i>
                    <a href="mailto:adibribritalamanca@gmail.com">Envianos un correo</a>
                </p>
                <p class="p_item">
                    <i class="fas fa-phone-square-alt"></i>
                    87786690
                </p>
            </li>
            

            <li>
                <p class="p_title">Síguenos en</p>
                <p class="p_item">
                   <a href="https://www.facebook.com/ADITIBRI"><i class="fab fa-facebook fa-2x"></i></a>
                
                </p>
            </li>
            
            <li><img class="img2" src="../Images/logoADITIBRI.jpg" alt=""></li>
        </ul>
    </footer>

</body>

</html>