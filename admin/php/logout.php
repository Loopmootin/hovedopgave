<?php
session_start();
session_destroy();
header('Location: /hovedopgave/admin/index.php');
?>