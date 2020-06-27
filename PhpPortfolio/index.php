<?php
    require "header.php";
?>

<main>
<?php
if (isset($_SESSION['userId'])){
echo ' <p>You are currently logged in</p>';
}
else {
    echo ' <p>You are currently logged out</p>';
}
?>
</main>

<?php
    require "footer.php";
?>