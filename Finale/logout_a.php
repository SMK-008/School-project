<?php

    require "function_a.php";
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: home.php");

?>