<?php
    session_start();
    include_once("dbh.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>

    <?php
        //require_once("nbbc/nbbc.php");
        //$bbcode = new BBCode;

        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        $posts = "";

        if (mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $content = $row['content'];
                $date = $row['date'];

                $admin ="<div><a href='del_post.php?pid=$id'>Delete</a>&nbsp;<a href='edit_post.php?pid=$id'>Edit</a></div>";
                //$output = $bbcode->Parse($content); 
                
                $posts .= "<div><h2><a href='view_post.php?pid=$id'></a></h2><h3>$date</h3><p>$content</p>$admin<hr /></div>";
            }
            echo $posts;
        } else {
            echo "There are no posts to display!";
        }
    ?>

<button onclick="window.location.href = 'post.php';">New Post</button>
<button onclick="window.location.href = '../index.php';">Home</button>
    
</body>
</html>
