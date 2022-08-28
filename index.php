<?php include("admin/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Freak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Banner Section here  -->
    <div class="header">
        <div class="head-container-left">
            <h2>The Greates show on the earth</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply 
                random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                <a href="#">Watch Live > </a>
        </div>
        <!-- banner image  -->
        <div class="head-container-right">
            <img src="assets/Banner Image.png" alt="">
        </div>
    </div>
    <!-- banner ends here  -->

    <!-- transfer section starts here  -->
    <div class="transfer-container">
        <!-- navigation bar  -->
        <div class="navbar">
            <a href="upcomming.html">Upcoming Match</a>
            <a href="#">All Group</a>
            <a class="active" href="#">Blog</a>
        </div>
        <!-- navigation bar ends  -->
        <div class="transfers">
        <?php
          $query = "SELECT * FROM news";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <div class="transfer">
                <img src="<?php echo $row['picture']; ?>" alt="">
                <h4><?php echo $row['category']; ?></h4>
                <h3><?php echo $row['title']; ?></h3>
            </div>
          
          <?php } ?>
            <!-- <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div>
            <div class="transfer">
                <img src="assets/Blog Image.png" alt="">
                <h4>Transfer</h4>
                <h3>Transfer Live: Chlesea in talks
                    over Kimpenbe transfer</h3>
            </div> -->
        </div>
    </div>
    <footer>
        <h2>Goal</h2>
        <hr>
        <div class="foot-links">
            <a href="#">Contact Us</a>
        <a href="#">Terms of Service</a>
        <a href="#">Privacy Policy</a>
        <a href="#">privacy Setting</a>
        <a href="#">Goal App</a>
        <a href="#">Goal Live</a>
        </div>
    </footer>
</body>
</html>