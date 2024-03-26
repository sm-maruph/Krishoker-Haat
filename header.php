<?php
session_start();
$log = 0;
$fetch = []; 

// Include the database connection file
include("templete/db_connect.php");

if (!empty($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $log = 1;

    // Check if the database connection is open
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $select = mysqli_query($conn, "SELECT * FROM `user` WHERE user_id = '$user_id'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $fetch = mysqli_fetch_assoc($select);
    }
}

// if (!empty($_SESSION['restaurant_id'])) {
//     echo $_SESSION['restaurant_id'];
//    $restaurant_id = $_SESSION['restaurant_id'];
//    $logres = 1;


//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $select = mysqli_query($conn, "SELECT * FROM `restaurant` WHERE restaurant_id = '$restaurant_id'") or die('query failed');

//     if (mysqli_num_rows($select) > 0) {
//         $fetch = mysqli_fetch_assoc($select);
//     }
// }

?>
<div class="header">
        <video autoplay loop class="background-video" muted plays-inline>
            <source src="image/background.mp4" type="video/mp4">
        </video>
        <nav>
        <h1 class="logt">কৃষকের <span>হাট</span></h1>
            <ul class="nav-links">
                <li><a href="http://localhost/project/bitemap.php">HOME</a></li>
                <li><a href="features.php">ABOUT US</a></li>
                <li><a href="offerHOme.php">CONTACT</a></li>
                <li><a href="aboutus.php">#</a></li>
                <li><a href="aboutus.php">#</a></li>
                
            

                    <?php if($log): ?>
               
                <li><a href="http://localhost/project/userBloghome.php">COMMUNITY</a></li>
                <li><a href="http://localhost/project/messageHome.php">ARTICLE</a></li>
                <li><a href="http://localhost/project/messageHome.php">Cart</a></li>
                <li><a href="http://localhost/project/myReservation.php"><img src="image/cart1.png" alt="Shopping Cart"></a></li>
                <button type="submit" class ="navbutton"><a href="fuctions/logout.php">LOG OUT</a></button>
                  <li class="dropdown1">
                <?php 
                    echo '<img src="'.$fetch['profile_picture'].'" alt="Profile Picture" class="round-image">';
                  ?>
                   <div class="dropdown1-content1">
                    <a href="http://localhost/project/userProfile.php">User Profile</a>
                    <a href="http://localhost/project/updateProfile.php">Update Profile</a>
                    <a href="fuctions/logout.php">LOG OUT</a>
                </div>
              </li>
               

             </ul>
            
          
            <?php else: ?>
                <div class="dropdown2">
    <button type="submit" class="navbutton"> লগ ইন</button>
    <div class="dropdown2-content2">
        <a href="http://localhost/project/restaurant/login.php">Restaurant</a>
        <a href="http://localhost/project/login.php">Customers</a>
        <a href="#">Admin</a>
    </div>
</div>
                <button type="submit"class ="navbutton"><a href="http://localhost/project/signuphome.php">নিবন্ধন করুন</a></button>            

            <?php endif; ?>

        </ul>
    </nav> 
</div>   