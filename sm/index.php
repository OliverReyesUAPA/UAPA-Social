
<?php
    //Copyright by Oliver Reyes ©2019
    require "header.php";
?>

<main class="main-content">
<!-- Copyright by Oliver Reyes ©2019 -->

    <?php
        if(isset($_SESSION['idUser']))
        {
            echo '<p>You are loged in!</p>';            
        }
        else
        {
            echo '<p>You are loged out!</p>';
        }
        
    ?>
</main>

<?php
    require "footer.php";
?>