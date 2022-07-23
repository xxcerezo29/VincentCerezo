<?php 
    $title="Hobbies"; 
    include "components/Header.php"; 
?>
<body>
    <?php 
        $home = "navLink";
        $education = "navLink";
        $hobbies = "active";
        $movies = "navLink";
        $musics = "navLink";
    include "components/Navbar.php" 
    ?>  

    <div class="bigContainer">

        <center>
            <div class="container flex">
                <h1>Hobbies</h4>
            </div>
            <div class="container flex">
                <h4>Watching movies</h4>
            </div>
            <div class="container flex">
                <h4>Playing games</h4>
            </div>
            <div class="container flex">
                <h4>Playing Guitar</h4>
            </div>
            <div class="container flex">
                <h4>Watching about programming in Youtube</h4>
            </div>
        </center>
    </div>
    
</body>
<?php include "components/Footer.php" ?>