<?php
    session_start();
    include_once("dbh.php");

    
    if (!isset($_SESSION['userId'])) {
        header("Location: ../index.php");
        return;
    }

    if(!isset($_GET['pid'])) {
        header("Location: post_view.php");
    } 

    $pid = $_GET['pid'];

    if(isset($_POST['update'])) {
        $content = strip_tags($_POST['content']);

        $content = mysqli_real_escape_string($conn, $content);
        $date = date("F j, Y, g:i a");  

        $sql = "UPDATE posts SET content = '$content', date = '$date' WHERE id=$pid";

        if ($content == "") {
            echo "Please complete your post!";
            return;
        }

        mysqli_query($conn, $sql);
        header("Location: post_view.php");
    }
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

        $sql_get = "SELECT * FROM posts WHERE id=$pid LIMIT 1";
        $res = mysqli_query($conn, $sql_get);

        if(mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $content = $row['content'];

                echo "<form action='edit_post.php?pid=$pid' method='post' enctype='multipart/form-data'>";
                echo "<textarea placeholder='Content' name='content' rows='20' cols='50'>$content</textarea><br />";
            }
        }
    ?>
   
        <input name="update" type=submit value="Update">
    </form>
</body>
</html>