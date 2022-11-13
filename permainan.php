<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
        <title>TICTACTOE</title>
    </head>
    <body>
        <!-- Player -->
        <div class="profile">
        <div class="profile1">
            <img class="foto1" src="assets/player1.png" alt="">
            <p class="nama">Player 1</p>
            <img src="assets/x.png" style="height:30px; width:30px ;" alt="">
        </div>
        <div class="profile2">
            <img class="foto2" src="assets/player2.png" alt="">
            <p class="nama">Player 2</p>
            <img src="assets/o.png" style="height:30px; width:30px ;" alt="">
        </div>
        </div>
    <!-- isi permainan -->
    <div class="wrapper">

       <div class="container">
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
           <button class="button-option"></button>
       </div>
       <a href="menu.php" class="back" type="button">BACK</a>

   </div>
   <div class="popup hide">
       <p id="message"></p>
       <button id="new-game"><img src="assets/retry.png" style="height:65px ; width:65px;" alt=""></button>
   </div>
   
    <!-- Script -->
    <script src="script.js"></script>
</body>
</html>