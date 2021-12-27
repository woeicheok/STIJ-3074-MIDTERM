<?php
if(isset($_POST["submit"])) {
    include_once("../MIDTERM/dbconnect.php");
    $roomid = $_POST["roomid"];
    $contact = $_POST["contact"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $deposit = $_POST["deposit"];
    $state = $_POST["state"];
    $area = $_POST["area"];
    $datecreated = $_POST["datecreated"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $sqlregister = "INSERT INTO table_registerroom (`roomId`, `Contact`, `Title`, `Description`, `Price`, `Deposit`, `state`, `Area`, `DateCreated`, `Latitude`, `Longitude`) 
    VALUES (`$roomid`, `$contact`, `$title`, `$description`, `$price`, `$deposit`, `$state`, `$area`, `$datecreated`, `$latitude`, `$longitude`)";
    try {
        $conn->exec($sqlregister);
       //if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileTOUpload"]["tmp_name"])) {
                //uploadImage($roomid);
                echo "<script>alert('Registration successful')</script>";
                echo "<script>window.location.replace('Mainpage.php')</script>";
            } catch (PDOException $e) {
                echo "<script>alert('Registration failed')</script>";
                echo "<script>window.location.replace('RentARoom.php')</script>";
            }
        }
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
    <title>RENT A ROOM</title>
</head>

<body>
<div class="w3-header w3-container w3-aqua w3-padding-32 w3-center">
    <h1 style="font-size:calc(8px + 4vw);">STIJ 3074 A211 MIDTERM</h1>
    <p1 style="font-size:calc(8px + 4vw);">Rent A ROOM</p1>
    <hr>
    <p4 style="font-size:calc(4px + 2vw);">By ERIC TAN WEI CHEOK(s270685)</p4>
</div>

<div class="w3-bar w3-orange">
    <a href="Mainpage.php" class="w3-bar-item w3-button">Back</a>
</div>

<div class="w3-container w3-margin w3-form-container-reg">
    <div class="w3-card w3-round">
        <div class="w3-container w3-aqua">
            <p><b>New Room Registration<b></p>
        </div>
    <form class="w3-container w3-padding formco" name="registrationForm" class="w3-container"
     action="RentARoom.php" method="post" enctype="multipart/form-data">
        <p>
            <div class="w3-container w3-border w3-center w3-padding">
                <img class="w3-image w3-round w3-margin" src="../MIDTERM/image/" style="width:100%;
                max-width:600px"><br>
                <input type="file" onchange="previewFile()" name="fileToUpload" id="fileToUpload"><br>
            </div>
        </p>
        <p>
            <label>Room ID</label>
            <input class="w3-input w3-border w3-round" name="roomid" id="idroom"
            type="text" required>
        </p>
        <p>
            <label>Contact</label>
            <input class="w3-input w3-border w3-round" name="contact" id="idcontact"
            type="phone" required>
        </p>
        <p>
            <label>Title</label>
            <input class="w3-input w3-border w3-round" name="title" id="idtitle"
            type="text" required>
        </p>
        <p>
            <label>Description</label>
            <textarea class="w3-input w3-border w3-round" name="description" id="iddescription" 
            rows="4" cols="50" width="50" type="text" required></textarea>
        </p>
        <p>
            <label>Price</label>
            <input class="w3-input w3-border w3-round" name="price" id="idprice"
            type="price" required>
        </p>
        <p>
            <label>Deposit</label>
            <input class="w3-input w3-border w3-round" name="deposit" id="iddeposit"
            type="price" required>
        </p>
        <p>
            <label>State</label>
            <input class="w3-input w3-border w3-round" name="state" id="idstate"
            type="text" required>
        </p>
        <p>
            <label>Area</label>
            <input class="w3-input w3-border w3-round" name="area" id="idarea"
            type="text" required>
        </p>
        <p>
            <label>Date Created</label>
            <input class="w3-input w3-border w3-round" name="datecreated" id="iddate"
            type="date" required>
        </p>
        <p>
            <label>Latitude</label>
            <input class="w3-input w3-border w3-round" name="latitude" id="idlatitude"
            type="text" required>
        </p>
        <p>
            <label>Longitude</label>
            <input class="w3-input w3-border w3-round" name="longitude" id="idlongitude"
            type="text" required>
        </p>
        <p>
            <button class="w3-btn w3-round w3-aqua w3-block w3-center" type="submit" onclick="return confirmDialog()" name="submit">Submit</button>
        </p>
        </form>
    </div>
</div>

<footer class="w3-container w3-grey w3-center">
    <p> © Copyright:RentARoom</p>
    <p>TERMS AND CONDITIONS <br> PRIVACY POLICY</p>
    <p><a href="mailto:hairstudio@example.com">RentARoom@gmail.com</a></p>
</footer>
    
</body>
</html>