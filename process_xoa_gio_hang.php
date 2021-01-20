<?php
session_start();
unset($_SESSION['gio_hang']);
header("Location:Xem_gio_hang.php");