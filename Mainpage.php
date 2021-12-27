<?php
include_once("../MIDTERM/dbconnect.php");
$sqlregister = "SELECT * FROM tbl_registerroom ORDER BY datecreated DESC";
$stmt = $conn->prepare($sqlregister);
//$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchALL();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../MIDTERM/style.css">
    <script src="../MIDTERM/script.js"></script>
    <title>STIJ3074 MidTerm - RENT A ROOM</title>

</head>

<body>
<div class="w3-header w3-container w3-aqua w3-padding-32 w3-center">
    <h1 style="font-size:calc(8px + 4vw);">STIJ 3074 A211 MIDTERM</h1>
    <p1 style="font-size:calc(8px + 4vw);">Rent A ROOM</p1>
    <hr>
    <p4 style="font-size:calc(4px + 2vw);">By ERIC TAN WEI CHEOK(s270685)</p4>
</div>

<div class="w3-bar w3-orange">
    <a href="RentARoom.php" class="w3-bar-item w3-button w3-hide-small">Register</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-left w3-hide-large w3-hide-medium" onclick="myFunction()">MENU</a>
</div>

<div id="idnavbar" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="RentARoom.php" class="w3-bar-item w3-button w3-left">Register</a>
</div>


<div class="w3-container w3-center w3-blue-gray">
    <h2>Please Click on the button above to continue</h2>
    <p>For register a room please click on Register button.</p>
</div>

<div class="w3-grid-template">
    <div class="w3-display-container w3-light-grey w3-padding-32">
    <img src="../MIDTERM/image/Profile.png">
    <p>ROOM ID <br> 1</p>
    <p>Contact <br> 0195552235</p>
    <p>Title <br> Middle Room at Kiara Residence 2</p>
    <p>Description <br> Prefer move-in immediately, 6 month, 12month and above <br> Malaysian, Student, Employed</p>
    <p>State <br> Kuala Lumpur</p>
    <p>Area <br> Mount Kiara</p>
</div>

<div class="w3-grid-template">  
    <?php
    foreach ($rows as $room) {
        $roomid = $room['roomid'];
        $contact = $room['contact'];
        $title = $room['title'];
        echo "<div class='w3-center w3-padding'>";
        echo "<div class='w3-card-4 w3-dark-grey'>";
        echo "<header class='w3-container w3-blue'>";
        echo "<h5>$contact</h5>";
        echo "</header>";
        echo "<img class='w3-image' src../midterm/image/$roomid.png" . 
        "onerror=this.onerror=nll;this.src='../midterm/image/profile.png'" .
        "style='width:100%;height:250px'>";
        echo "<div class='w3-container w3-left-align'><hr>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>


<footer class="w3-container w3-grey w3-center">
    <p> © Copyright:RentARoom</p>
    <p>TERMS AND CONDITIONS <br> PRIVACY POLICY</p>
    <p><a href="mailto:hairstudio@example.com">RentARoom@gmail.com</a></p>
</footer>

</body>
</html>