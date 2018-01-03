<?php

//$page_title=isset($page_title)?$page_title:"Default";
$paget=$page_title??"Default";//tenary operator for php 7
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $paget;?></title>
    <link id="logo" rel="icon" href="../img/gbc_logo.PNG">

    <!-- Bootstrap core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">


</head>
<body>


<nav class="navbar navbar-inverse bg-light">
    <div class="container">
        <ul class="nav justify-content-between">
            <li><a class="nav-link text-dark" href="../public/Discussion.php">Discussion Board</a></li>
            <li><a class="nav-link text-dark" href="../public/Recent.php">Recent Stories</a></li>
            <li><a class="nav-link text-dark" href="../public/Popular.php">Popular Stories</a></li>
        </ul>
        <form style="padding-left: 30%"  class="form-inline navbar-form">
            <input type="text" class="form-control" placeholder="Search" name="search">
        </form>
        <ul class="nav justify-content-between">

            <li ><a href="../public/login.php">Login</a></li>

        </ul>
    </div>
</nav>