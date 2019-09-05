<?php
    //Copyright by Oliver Reyes ©2019
    require "header.php";
    if(!isset($_POST['signup-submit']))
    {
        header("Location: index.php");
    }
?>

    <main class="main-content">
    <!-- Copyright by Oliver Reyes ©2019 -->
        <div class="wrapper-main">
            <section class="section-card">
                <h1>Signup</h1>
                    <form class="form-signup" action="includes/signup.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username">
                        <input type="text" name="mail" placeholder="E-mail">
                        <input type="password" name="pwd" placeholder="Password...">
                        <input type="password" name="pwd-repeat" placeholder="Repeat password...">
                        <button name="signup-submit" class="btn">Submit</button>
                    </form>
            </section>
        </div>
    </main>
    
<?php
    require "footer.php";
?>