<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="hipchat.png">
    <script src="script.js"></script>
</head>

<!--
<header>
    <div class="titleLogo">
        <h1>
            LiveChat
            <img rel="image" src="hipchat.png" class="image" alt="Logo icon">
            
        </h1>
        <input type="button" id="joinRoom" value="Back to Login" onclick="redirect('joinRoom')">
    </div>
</header>
-->
<header>
    
</header>

<body style="margin: 0px; padding: 0px;">
    <div class="messageBox">
        <input type="button" id="joinRoom" value="Back to Login" onclick="redirect('joinRoom')" style="top: 10px; right: 10px; color: white;">
        <p id="messageBoxText" style="size: 45px;">Bonjours je m'appel Jean rene</p>
        <?php 
        echo 'User Ip adress: ' . $_SERVER['REMOTE_ADDR'];
        ?>
    </div>
    <div class="messageDiv">
        <form>
            <input type="image" id="emoji" src="img/emoji.png">
            <input type="text" id="message" name="message" placeholder="Enter message*" class="messageInput">
            <input type="image" id="send" src="img/icons8-sent-64.png" alt="submit">
        </form>
    </div>
    <!--    <textarea class="formRoom"></textarea>  -->
</body>
</html>