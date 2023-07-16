<?php

    require "function_ph.php";
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: home_ph.php");

?>