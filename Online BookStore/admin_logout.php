<?php
ob_start();
session_start();
session_destroy();
header('Location: adminsignin.php');
exit;