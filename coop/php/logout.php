<?php
session_start();
session_destroy();
header('Location: /hovedopgave/coop/index.php');
?>