<?php
    session_start();
    include_once("dbh.php");

    if (!isset($_SESSION['userId'])) {
        header("Location: ../index.php");
        return;
    }

    if(isset($_POST['post'])) {
        $content = strip_tags($_POST['content']);

        $content = mysqli_real_escape_string($conn, $content);
        $date = date("F j, Y, g:i a");  

        $sql = "INSERT into posts (content, date) VALUES ('$content', '$date')";

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
    <form action="post.php" method="post" enctype="multipart/form-data">
        <textarea placeholder="Content" name="content" rows="20" cols="50"></textarea><br />
        <input name="post" type=submit value="Post">
    </form>
</body>
</html>