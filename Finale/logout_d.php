<?php

    require "function_d.php";
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: home.php");

?>