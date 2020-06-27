<?php
    require "header.php";
?>

<main>
<h1>Signup</h1>
    <?php
    if (isset($_GET["error"])){
        if ($_GET['error'] == "emptyfields"){
            echo '<p class="signuperror">Please fill in all fields</p>';
        }
        else if ($_GET["error"] == "invalidemail"){
            echo '<p class="signuperror">Please enter a valid e-mail</p>';
        }
        else if ($_GET["error"] == "invaliduid"){
            echo '<p class="signuperror">Please enter a valid username</p>';
        }
        else if ($_GET["error"] == "passwordcheck"){
            echo '<p class="signuperror">Your passwords do not match</p>';
        }
        else if ($_GET["error"] == "usertaken"){
            echo '<p class="signuperror">That username is already taken</p>';
        }
    
    else if ($_GET["signup"] == "success"){
        echo '<p class="signupsuccess">Welcome you have successfully signed up!</p>';
    }
}
    ?>
    <form action="includes/signup.inc.php" method="post">
    <input type="text" name="userid" placeholder="Username">
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="repwd" placeholder="Repeat Password">
    <button type="submit" name="signup-submit">Signup</button>
    </form>
</main>

<?php
    require "footer.php";
?>