<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/db.php"); ?>
<?php

$_SESSION["id"] = NULL;
$_SESSION["username"] = NULL;
redirect_to("login.php");

?>