<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/db.php"); ?>
<?php confirm_logged_in(); ?>
<?php echo message() ?>
<?php

$id = $_GET["id"];
$query = "DELETE FROM register WHERE id = {$id} LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && mysqli_affected_rows($conn) == 1) {
    $_SESSION["id"] = NULL;
    $_SESSION["username"] = NULL;
    redirect_to("login.php");
} else {
    $_SESSION["message"] = "Something went wrong!";
}
?>