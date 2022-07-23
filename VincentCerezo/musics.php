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
            <div class="container flex">
                <h6>To play the audio, hover the mouse to the box. if the audio didn't play click the background then hover it again.</h4>
            </div>
            <div class="container flex music" onmouseover="playSound('Maria', 'maria')" onmouseout="stopSound('Maria', 'maria')" >
                <h4>Dear Maria, Count Me in - All Time Low</h4>
                <div id="maria"></div>
                <audio id="Maria" hidden>
                    <source src="assets/Dear Maria.mp3" type="audio/mpeg">
                </audio>
                
            </div>
            <div class="container flex" onmouseover="playSound('Neverland', 'neverland')" onmouseout="stopSound('Neverland', 'neverland')">
                <h4>Somewhere in Neverland - All Time Low</h4>
                <div id="neverland"></div>
                <audio id="Neverland" hidden>
                    <source src="assets/Somewhere In Neverland.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="container flex" onmouseover="playSound('Timebomb', 'timebomb')" onmouseout="stopSound('Timebomb', 'timebomb')">
                <h4>Time-Bomb - All Time Low</h4>
                <div id="timebomb"></div>
                <audio id="Timebomb" hidden>
                    <source src="assets/TimeBomb.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="container flex" onmouseover="playSound('Get', 'get')" onmouseout="stopSound('Get', 'get')">
                <h4>That's What You Get - Paramore</h4>
                <div id="get"></div>
                <audio id="Get" hidden>
                    <source src="assets/Thats What You Get.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="container flex" onmouseover="playSound('Learn', 'learn')" onmouseout="stopSound('Learn', 'learn')">
                <h4>Will You Ever Learn - Typecast </h4>
                <div id="learn"></div>
                <audio id="Learn" hidden>
                    <source src="assets/Will You Ever Learn.mp3" type="audio/mpeg">
                </audio>
            </div>
        </center>
    </div>
    
</body>
<script>
    function playSound(obj, text){
        var audio = document.getElementById(obj);
        var text = document.getElementById(text);
        text.textContent = "Playing...";
        audio.play();
    }
    function stopSound(obj, text){
        var audio = document.getElementById(obj);
        var text = document.getElementById(text);
        text.textContent = "";
        audio.pause();
        // audio.currentTime = 0;
    }
</script>
<?php include "components/Footer.php" ?>