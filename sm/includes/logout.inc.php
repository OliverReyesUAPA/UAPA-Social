<?php
    //Copyright by Oliver Reyes ©2019
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");