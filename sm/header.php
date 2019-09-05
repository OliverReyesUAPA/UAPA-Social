<?php
    session_start();
    //Copyright by Oliver Reyes ©2019
?>

<!DOCTYPE html>
<!-- Copyright by Oliver Reyes ©2019 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>UAPA Social</title>
</head>
<body>

    <header>

        <nav class="nav-bar">
        
            <div class="navigation">
            
                <a href="#">
                    <img src="SRC/logoUAPA.png" alt="logo">
                </a>
                
                <div class="links">
                    <?php
                        if(isset($_SESSION['idUser']))
                        {
                            echo '  <a href="index.php">Feed</a>
                                    <a href="profile.php">Perfil</a>
                                    <a href="radio.php">Radio UAPA</a>
                                    <a href="#">Amigos</a>';
                        }
                        else
                        {
                            echo '  <a href="index.php">Home</a>
                                    <a href="radio.php">Radio UAPA</a>';
                        }
                    ?>
                </div>


            </div>
            

            <div class="form">

                <?php
                    if(isset($_SESSION['idUser']))
                    {

                        echo '<form action="includes/logout.inc.php" method="post">';
                        echo "Usuario: ".$_SESSION["username"];
                        echo '
                            <button class="btn" type ="submit" name="logout-submit">Logout</button>
                            </form>';
                    }
                    else
                    {
                        echo'
                            <form class="input-form" action="includes/login.inc.php" method = "post">
                            <input type="text" name = "mailuid" placeholder = "Usuario/E-mail">
                            <input type="password" name = "pwd" placeholder = "Contraseña">
                            <button class="btn" type ="submit" name="login-submit">Login</button>
                            <a id="signup" href="signup.php">Registrate</a>
                            </form>';
                    }

                ?>
                
            </div>
            


        </nav>
    
    </header>

