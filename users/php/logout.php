<?php

session_start();
unset($_SESSION['Account']);
unset($_SESSION['Creators']);
header('location: ../main/login.php');