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
        
        <?php session_start(); ?>
        
        <?php 
            

            $username = $_SESSION['username'];
            $roomid = $_SESSION['roomid'];

            echo $username." - ".$roomid;
            
            
            
            
            echo 'User Ip adress: ' . $_SERVER['REMOTE_ADDR']."<br>";

            $servername = "localhost";
            $username="root";
            $password = "";
            $dbname= "mydbmile2";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT Id, Room_msg FROM room";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo " - ";
                echo$row["Id"];
                echo ": ";
                echo$row["Room_msg"];
                echo "<br>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();

        ?>
    </div>
    <div class="messageDiv">
        <form method="post">
            <input type="image" id="emoji" src="img/emoji.png">
            <input type="text" id="message" name="message" placeholder="Enter message*" class="messageInput">
            <input type="image" id="send" src="img/icons8-sent-64.png" alt="submit">
        </form>


        <?php
        $servername = "localhost";
        $username="root";
        $password = "";
        $dbname= "mydbmile2";
        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $message = $_POST['message'];

        if($message != ""){
            $sql = "INSERT INTO `room` (`Id`, `User_Id`, `Room_Id`, `Room_msg`) VALUES ('', '11', '11', '$message')";
            $conn->exec($sql);
        }

        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        ?>


    </div>
    <!--    <textarea class="formRoom"></textarea>  -->
</body>
</html>