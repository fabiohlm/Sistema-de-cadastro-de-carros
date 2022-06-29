<?php
    include "../conf.php";

    session_abort();
    clearstatcache();
    header("Location: ../index.php")
?>