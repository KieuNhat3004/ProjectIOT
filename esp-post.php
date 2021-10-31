<?php

include 'connectDB.php';


$fb1 = $fb2 = $fb3 = $fb4 = $fb5 = $fb6 = $temp = $hum = $presss = $dienap = $dongdien = $congsuat = $diennang = $tanso = $hscongsuat = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fb1 = test_input($_POST["fb1"]);
        $fb2 = test_input($_POST["fb2"]);
        $fb3 = test_input($_POST["fb3"]);
        $fb4 = test_input($_POST["fb4"]);
        $fb5 = test_input($_POST["fb5"]);
        $fb6 = test_input($_POST["fb6"]);

        $temp = test_input($_POST["temp"]);
        $hum = test_input($_POST["hum"]);
        $press = test_input($_POST["press"]);

        $dienap = test_input($_POST["dienap"]);
        $dongdien = test_input($_POST["dongdien"]);
        $congsuat = test_input($_POST["congsuat"]);
        $diennang = test_input($_POST["diennang"]);
        $tanso = test_input($_POST["tanso"]);
        $hscongsuat = test_input($_POST["hscongsuat"]);
        
        $sql = "UPDATE feedback SET fb1='$fb1', fb2='$fb2', fb3='$fb3', fb4='$fb4', fb5='$fb5', fb6='$fb6',
        temp='$temp', hum='$hum', press='$press', dienap='$dienap', dongdien='$dongdien', congsuat='$congsuat',
        diennang='$diennang', tanso='$tanso', hscongsuat='$hscongsuat' WHERE id=0";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();

}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>