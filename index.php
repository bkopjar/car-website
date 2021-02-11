<?php
    require "header.php";
?>

<main>
<nav class = "navbar navbar expand-lg navbar-dark">

    <?php
        if(isset($_SESSION['userId'])) {
            echo '<p class="login-status">You are logged in!</p>';   
        }
        else {
            echo '<p class="login-status">You are logged out!</p>';
        }
      
    ?>
  
</nav>
</main>


<?php
    require "footer.php";
?>