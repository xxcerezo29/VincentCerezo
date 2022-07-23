<?php 
    $title="Musics"; 
    include "components/Header.php"; 
?>
<body>
    <?php 
        $home = "navLink";
        $education = "navLink";
        $hobbies = "navLink";
        $movies = "navLink";
        $musics = "active";
    include "components/Navbar.php" 
    ?>  

<div class="bigContainer">
        <center>
            <div class="container flex">
                <h1>Music</h4>
            </div>
            <div class="container flex music">
                <h4>Dear Maria, Count Me in - All Time Low</h4>
                <audio controls muted>
                    <source src="assets/Dear Maria.mp3" type="audio/mpeg">
                </audio>
                
            </div>
            <div class="container flex">
                <h4>Somewhere in Neverland - All Time Low</h4>
                <audio controls muted>
                    <source src="assets/Somewhere In Neverland.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="container flex">
                <h4>Time-Bomb - All Time Low</h4>
                <audio controls muted>
                    <source src="assets/TimeBomb.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="container flex">
                <h4>That's What You Get - Paramore</h4>
                <audio controls muted>
                    <source src="assets/Thats What You Get.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="container flex">
                <h4>Will You Ever Learn - Typecast </h4>
                <audio controls muted>
                    <source src="assets/Will You Ever Learn.mp3" type="audio/mpeg">
                </audio>
            </div>
        </center>
    </div>
    
</body>
<?php include "components/Footer.php" ?>