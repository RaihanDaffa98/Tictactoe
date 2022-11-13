<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap"rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <title>MAIN MENU</title>
    </head>
    <body>
    <img class="logo" src="assets/logo.png" alt="gambar rusak">
]
    <div class="wrappermenu">    
        
    <input class="boxnama" type="text" name="name" <?=isset($_POST['namaplayer']) ? $_POST['nama'] : ''?>placeholder="NAME"> <br>
        
        <input class="boxemail" type="text" name="email" id="email" placeholder="E-MAIL">


        <a href="permainan.php" button class="start" type="button"><img src="assets/play.png" style="width: 25px; height: 25px;">Start</a><br>


        <a href="leaderboard.php" button class="leaderboard" type="button"><img src="assets/trophy.png" style="width: 25px; height: auto">leaderboard</a>
    </div>
  
    <script src="script.js"> </script>
    </body>
</html>