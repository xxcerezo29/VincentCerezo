<?php 
    $title="Home"; 
    include "components/Header.php"; 
?>
<body>
    <?php
        $home = "active";
        $education = "navLink";
        $hobbies = "navLink";
        $movies = "navLink";
        $musics = "navLink";
     include "components/Navbar.php";
     ?>
    <center>
        <h1 class="indexH1">Hi Buddy!!! Welcome!!</h1>
        <img class="myPic" src="assets/Pic.jpg" alt="">
        <h1 class="indexH1">Vincent Cerezo</h1>
    </center>
    
<?php include "components/Footer.php" ?>