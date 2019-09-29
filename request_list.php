<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/db.php"); ?>
<?php confirm_logged_in(); ?>
<?php echo message() ?>
<?php
//$username = $_SESSION["username"];
$query = "SELECT * FROM request";
$admin_set = mysqli_query($conn, $query);
$user = $_SESSION["username"];
$select = "SELECT * FROM register WHERE uname = '$user'";
$select_set = mysqli_query($conn, $select);
$member = mysqli_fetch_assoc($select_set);
?>
<html>
    <head>
        <title>User Requests</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/coverphoto.css">
        <link href="css/phonesize.css" rel="stylesheet" type="text/css" media="only screen and (max-width:450px)" />
        <link href="css/requestlistphone.css" rel="stylesheet" type="text/css" media="only screen and (max-width:450px)" />
        <link href="css/tabletsize.css" rel="stylesheet" type="text/css" media="only screen and (min-width:451px) and (max-width:960px)" />
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script type="text/javascript" src="js/request_list.js"></script>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
    </head>
    <body id="cover">
        <div class="container-fluid">
            <div class="row">
                <div class="container-fluid">
<?php
include("header.php");
?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="navBar">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
<?php
if (isset($_SESSION["id"])) {
    if ($member["role"] == "member") {
        echo '<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>';
        echo '<li><a href="Registration.php">Register</a></li>';
        echo '<li><a href="profile.php">Profile</a></li>';
        echo '<li><a href="logout.php">Logout</a></li>';
        echo '<li><a href="About.php">About Us</a></li>';
        echo '<li><a href="comments.php">Comments</a></li>';
    } else {
        echo '<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>';
        echo '<li><a href="Registration.php">Register</a></li>';
        echo '<li><a href="profile.php">Profile</a></li>';
        echo '<li><a href="logout.php">Logout</a></li>';
        echo '<li><a href="About.php">About Us</a></li>';
        echo '<li><a href="comments.php">Comments</a></li>';
        echo '<li><a href="manage_admins.php">Manage Admin</a></li>';
        echo '<li><a href="people.php">People</a></li>';
        echo '<li class="active"><a href="request_list.php">Request List</a></li>';
        echo '<li><a href="changePosition.php">Update Positions</a></li>';
    }
} else {
    echo '<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>';
    echo '<li><a href="Registration.php">Register</a></li>';
    echo '<li><a href="login.php">Login</a></li>';
    echo '<li><a href="About.php">About Us</a></li>';
    echo '<li><a href="comments.php">Comments</a></li>';
}
?>    
                            </ul>


                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jumbotron table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Username</th> 
                                <th>Reason</th>
                                <th>Money</th>
                                <th colspan="2">Other</th>
                            </tr>
<?php while ($admin = mysqli_fetch_assoc($admin_set)) { ?>
                                <tr id="parent">
                                    <td><?php echo $admin["uname"]; ?></td> 
                                    <td><?php echo $admin["reason"]; ?></td> 
                                    <td><?php echo $admin["money"]; ?></td> 
                                    <td><?php echo $admin["other"]; ?></td>
                                    <td><a href="delete_request.php?id=<?php echo urlencode($admin["id"]); ?>" class="btn btn-success" name="done" id="done" onclick="return confirm('Are you sure?');">Done</a></td>    
                                </tr>
<?php } ?>
                        </table>
                    </div>
                </div>
            </div>
                            <?php
                            include("footer.php");
                            ?>
        </div>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>