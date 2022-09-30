<?php

session_start();
unset($_SESSION['Account']);
header('location: ../main/login.php');