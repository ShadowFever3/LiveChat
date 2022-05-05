<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="hipchat.png">
    <script src="script.js">
        //Clearly not what you think ^^
        function rickroll(){
            location = 'https://youtu.be/dQw4w9WgXcQ'
        }
    </script>
</head>
<header>
    <div class="titleLogo">
        <h1>
            LiveChat
            <img rel="image" src="hipchat.png" class="image" alt="Logo icon">
        </h1> 
        <input type="button" id="joinRoom" value="Back to Main Menu" onclick="redirect('home')">
    </div>
</header>
<body>
    <?php session_start(); ?>
    <form method="post" action="room.php">
        <input type="text" id="userNameForm" name="userNameForm" placeholder="Username*" class="formRoom text"><br>
        <input type="text" id="roomIdForm" name="roomIdForm" placeholder="Room Id*" class="formRoom text"><br>
        <input type="button" value="Join Room" class="formRoom formButton text" onclick="redirect('room')"><br>
    </form>

        <?php
            $_SESSION['username'] = POST['userNameForm'];
            $_SESSION['roomid'] = POST['roomIdForm'];
        ?>

</body>
</html>