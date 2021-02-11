<?php
    session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- main css -->
<link rel="stylesheet" href="css/main.css">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
<!-- font awesome -->
<script src="js/all.js"></script>
<!-- script -->
<script src="js/script.js"></script>
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<title>Title</title>
</head>

<body>

<!-- navbar -->

<nav class = "navbar navbar expand-lg navbar-dark">
    <a href="#">
        <img src="img/sports car logo.png" alt="" height="120" width="150">
    </a>
    <h2 class="logo-text title text-uppercase">cars</h2>
    <div class="header-login align-right">
        
        <?php
                 if(isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                    </form>
                    <form action="includes/post_view.php" method="post">
                    <button type="view" name = "view-posts">View Posts</button>
                    </form>';
                }
                
                
                else {
                    echo '<form action="includes/login.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                 </form>
                <a href="signup.php" class="header-signup">Signup</a>
                <form action="includes/post_view.php" method="post">
                    <button type="view" name = "view-posts">View Posts</button>
                    </form>';
                }
            ?>

    </div>
</nav>



