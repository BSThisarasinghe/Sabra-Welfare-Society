<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/db.php"); ?>
<?php echo message() ?>
<?php
    
    $sql1 = "SELECT * FROM aboutus WHERE position = 'Counsellor'";
    $admin_set1 = mysqli_query($conn, $sql1);
    $admin1 = mysqli_fetch_assoc($admin_set1);
    
    $sql2 = "SELECT * FROM aboutus WHERE position = 'President'";
    $admin_set2 = mysqli_query($conn, $sql2);
    $admin2 = mysqli_fetch_assoc($admin_set2);
    
    $sql3 = "SELECT * FROM aboutus WHERE position = 'Vice President'";
    $admin_set3 = mysqli_query($conn, $sql3);
    $admin3 = mysqli_fetch_assoc($admin_set3);
    
    $sql4 = "SELECT * FROM aboutus WHERE position = 'Secretary'";
    $admin_set4 = mysqli_query($conn, $sql4);
    $admin4 = mysqli_fetch_assoc($admin_set4);
    
    $sql5 = "SELECT * FROM aboutus WHERE position = 'Deputy Secretary'";
    $admin_set5 = mysqli_query($conn, $sql5);
    $admin5 = mysqli_fetch_assoc($admin_set5);
    
    $sql6 = "SELECT * FROM aboutus WHERE position = 'Treasurer'";
    $admin_set6 = mysqli_query($conn, $sql6);
    $admin6 = mysqli_fetch_assoc($admin_set6);
    
?>
<html lang="en">
    <head>
        <title>About Us</title>
        <link type="text/css" rel="stylesheet" href="css/about.css">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="css/phonesize.css" rel="stylesheet" type="text/css" media="only screen and (max-width:450px)" />
        <link href="css/tabletsize.css" rel="stylesheet" type="text/css" media="only screen and (min-width:451px) and (max-width:960px)" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
     </head>
    <body>
         <div class="container-fluid">
<?php
    include("header.php");
?>
             <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="navBar">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
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
    $user = $_SESSION["username"];
    $select = "SELECT * FROM register WHERE uname = '$user'";
    $select_set = mysqli_query($conn, $select);
    $member = mysqli_fetch_assoc($select_set);

    if ($member["role"] == "member") {
        echo '<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>';
        echo '<li><a href="Registration.php">Register</a></li>';
        echo '<li><a href="profile.php">Profile</a></li>';
        echo '<li><a href="logout.php">Logout</a></li>';
        echo '<li class="active"><a href="About.php">About Us</a></li>';
        echo '<li><a href="comments.php">Comments</a></li>';
    } else {
        echo '<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>';
        echo '<li><a href="Registration.php">Register</a></li>';
        echo '<li><a href="profile.php">Profile</a></li>';
        echo '<li><a href="logout.php">Logout</a></li>';
        echo '<li class="active"><a href="About.php">About Us</a></li>';
        echo '<li><a href="comments.php">Comments</a></li>';
        echo '<li><a href="manage_admins.php">Manage Admin</a></li>';
        echo '<li><a href="people.php">People</a></li>';
        echo '<li><a href="request_list.php">Request List</a></li>';
        echo '<li><a href="changePosition.php">Update Positions</a></li>';
    }
} else {
    echo '<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>';
    echo '<li><a href="Registration.php">Register</a></li>';
    echo '<li><a href="login.php">Login</a></li>';
    echo '<li class="active"><a href="About.php">About Us</a></li>';
    echo '<li><a href="comments.php">Comments</a></li>';
}
?>    
                                </ul>


                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                 </div>
             </div>
             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" id="cover">
                    <p id="view">OUR FACULTY VIEW</p>
                </div>
             </div>
             <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                     <br><br><br>
                     <h1><b>OUR HISTORY</b></h1>
                </div>
             </div>
             <div class="row">
                 <div class="container">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                         <p class="paragraph">
                             Before we develop this society, there wasn't a way to help the staff people among us. There were funerals, weddings and so many other things of our staff members but we couldn't help them with money or anything. Sometimes we couldn't at least attend those events because we didn't have a connection. So we decided to make this society to have a good connection between us. We started this in 2010. During these years we have done lots of things. Now we have a good connection and good communication between us. We have helped each other in difficult times. We appointed several positions between us. They are Counsellor, President, Vice President, Secretary, Deputy Secretary, Treasurer and Committee members. Now we have through a big path to help each other. <br><br><br> Since 2010 we have had lots of people who beared those positions. We change those positions after every six months. That's how we give equality to every one here. Sometimes we care about not only our problems. In serious moments which people are in trouble in the country, we do our best to help them as well. As an example, when there was flood or slip situation in the country, we helped people by giving their needs. We have given scholarships as well. So this is the history of our society. We hope to continue our work and help each other in the future as well.
                         </p>	
                    </div>
                 </div>
             </div><br><br><br><br>
             <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <h1><b>OUR PEOPLE</b></h1><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <h4><?php echo $admin1["position"]; ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 165px;">
                                <img src="<?php echo $admin1["picture"]; ?>" class="img-thumbnail photo" style="width: 150px; height: 150px;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <?php echo $admin1["name"]; ?>
                                    <br><br>
                                </div>
                                <div class="row facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;
                                    <a href="<?php echo $admin1["fblink"]; ?>">Facebook</a>
                                    <br><br>
                                </div>
                                <div class="row email">
                                    <i class="fa fa-envelope"></i>&nbsp;
                                    <?php echo $admin1["email"]; ?>
                                    <br><br>
                                </div>
                                <div class="row phone">
                                    <i class="fa fa-phone"></i>&nbsp;
                                    <?php echo $admin1["phone"]; ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <h4><?php echo $admin2["position"]; ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 165px;">
                                <img src="<?php echo $admin2["picture"]; ?>" class="img-thumbnail photo" style="width: 150px; height: 150px;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <?php echo $admin2["name"]; ?>
                                    <br><br>
                                </div>
                                <div class="row facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;
                                    <a href="<?php echo $admin2["fblink"]; ?>">Facebook</a>
                                    <br><br>
                                </div>
                                <div class="row email">
                                    <i class="fa fa-envelope"></i>&nbsp;
                                    <?php echo $admin2["email"]; ?>
                                    <br><br>
                                </div>
                                <div class="row phone">
                                    <i class="fa fa-phone"></i>&nbsp;
                                    <?php echo $admin2["phone"]; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <h4><?php echo $admin3["position"]; ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 165px;">
                                <img src="<?php echo $admin3["picture"]; ?>" class="img-thumbnail photo" style="width: 150px; height: 150px;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <?php echo $admin3["name"]; ?>
                                    <br><br>
                                </div>
                                <div class="row facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;
                                    <a href="<?php echo $admin3["fblink"]; ?>">Facebook</a>
                                    <br><br>
                                </div>
                                <div class="row email">
                                    <i class="fa fa-envelope"></i>&nbsp;
                                    <?php echo $admin3["email"]; ?>
                                    <br><br>
                                </div>
                                <div class="row phone">
                                    <i class="fa fa-phone"></i>&nbsp;
                                    <?php echo $admin3["phone"]; ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <h4><?php echo $admin4["position"]; ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 165px;">
                                <img src="<?php echo $admin4["picture"]; ?>" class="img-thumbnail photo" style="width: 150px; height: 150px;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <?php echo $admin4["name"]; ?>
                                    <br><br>
                                </div>
                                <div class="row facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;
                                    <a href="<?php echo $admin4["fblink"]; ?>">Facebook</a>
                                    <br><br>
                                </div>
                                <div class="row email">
                                    <i class="fa fa-envelope"></i>&nbsp;
                                    <?php echo $admin4["email"]; ?>
                                    <br><br>
                                </div>
                                <div class="row phone">
                                    <i class="fa fa-phone"></i>&nbsp;
                                    <?php echo $admin4["phone"]; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <h4><?php echo $admin5["position"]; ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 165px;">
                                <img src="<?php echo $admin5["picture"]; ?>" class="img-thumbnail photo" style="width: 150px; height: 150px;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <?php echo $admin5["name"]; ?>
                                    <br><br>
                                </div>
                                <div class="row facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;
                                    <a href="<?php echo $admin5["fblink"]; ?>">Facebook</a>
                                    <br><br>
                                </div>
                                <div class="row email">
                                    <i class="fa fa-envelope"></i>&nbsp;
                                    <?php echo $admin5["email"]; ?>
                                    <br><br>
                                </div>
                                <div class="row phone">
                                    <i class="fa fa-phone"></i>&nbsp;
                                    <?php echo $admin5["phone"]; ?>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <h4><?php echo $admin6["position"]; ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 165px;">
                                <img src="<?php echo $admin6["picture"]; ?>" class="img-thumbnail photo" style="width: 150px; height: 150px;">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <?php echo $admin6["name"]; ?>
                                    <br><br>
                                </div>
                                <div class="row facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;
                                    <a href="<?php echo $admin6["fblink"]; ?>">Facebook</a>
                                    <br><br>
                                </div>
                                <div class="row email">
                                    <i class="fa fa-envelope"></i>&nbsp;
                                    <?php echo $admin6["email"]; ?>
                                    <br><br>
                                </div>
                                <div class="row phone">
                                    <i class="fa fa-phone"></i>&nbsp;
                                    <?php echo $admin6["phone"]; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div><br><br>
<?php
    include("footer.php");
?>
         </div>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
     </body>
</html>