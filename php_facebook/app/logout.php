<?php
/**
 * Created by PhpStorm.
 * User: Marco Barrios
 * Date: 23/02/2015
 * Time: 11:21 PM
 */

session_start();
unset($_SESSION['facebook']);
header('Location: ../index.php');