<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="This is a example">
    <meta name=viewpoint content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title></title>

</head>


<body>
<header>
    <a href="&">
        <img class="logo" src="img/Logo.png" alt="logo">
    </a>
    <nav>
    <ul class="nav_links">
        <li><a href="index.php">Home</a></li>
        <li><a href="&">Portfolio</a></li>
        <li><a href="&">About me</a></li>
        <li><a href="&">Contact</a></li>
    </ul>
    </nav>
    <div>
    <?php
    if (isset($_SESSION['userId'])){
    echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
    </form>';
    }
    else {
        echo '<form action="includes/login.inc.php" method="post">
        <input type="text" name="emailuid" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="signup.php">Signup</a>';
    }
    ?>

    </div>
</header>


