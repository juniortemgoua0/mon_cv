<?php
session_start();
require __DIR__ . "/utils/Utils.php";
require __DIR__ . "/utils/Data.php";
require __DIR__ . "/class/Experience.php";
require __DIR__ . "/class/Cursus.php";
require __DIR__ . "/class/Skill.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ------------  css ------------- -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS/materialize.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="icons-1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/jquery-ui.min.css">
     <link rel="stylesheet" href="CSS/sweetalert2.min.css">

    <!-- <link rel="stylesheet" href="CSS/reset.css"> -->


    <!-- ---------- JAVASCRIPT       -------- -->
    <script src="JS/materialize.min.js" defer></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/jquery-ui.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/sweetalert2.min.js"></script>
    <script src="JS/app.js"></script>
    <script src="/JS/jquery.min.js" defer></script>
    <script src="JS/kendo.all.min.js" defer></script>

</head>