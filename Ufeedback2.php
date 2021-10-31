<?php
include('connectDB.php');

    $query = mysqli_query($conn, "SELECT * FROM feedback");
    while($row = mysqli_fetch_array($query)){
        $id = $row['id'];
        $fb1 = $row['fb1'];
        $fb2 = $row['fb2'];
        $fb3 = $row['fb3'];
        $fb4 = $row['fb4'];
        $fb5 = $row['fb5'];
        $fb6 = $row['fb6'];
        $temp = $row['temp'];
        $hum = $row['hum'];
        $press = $row['press'];
        $dienap = $row['dienap'];
        $dongdien = $row['dongdien'];
        $congsuat = $row['congsuat'];
        $diennang = $row['diennang'];
        $tanso = $row['tanso'];
        $hscongsuat = $row['hscongsuat'];
    }
?>

    <td class="trtable">
        <h3><label id="diennang"><?php echo $diennang; ?></label> kWh</h3>
    </td class="trtable">
    <td>
        <h3><label id="tanso"><?php echo $tanso; ?></label> Hz</h3>
    </td>
    <td class="trtable">
        <h3><label id="hscongsuat"><?php echo $hscongsuat; ?></label></h3>
    </td>
