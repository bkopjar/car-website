<?php
    session_start();
    include_once("dbh.php");

    if (!isset($_SESSION['userId'])) {
        header("Location: ../index.php");
        return;
    }

    if(!isset($_GET['pid'])) {
        header("Location: post_view.php");
    } else {
        $pid = $_GET['pid'];
        $sql = "DELETE FROM posts WHERE id=$pid";
        mysqli_query($conn, $sql);
        header("Location: post_view.php");
    }
?>