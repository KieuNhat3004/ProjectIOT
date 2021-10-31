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
<canvas id="canvas1" class="gaugegs" data-type="radial-gauge"
    data-value="<?php echo $temp; ?>"
    data-width="250"
    data-height="250"
    data-units="°C"
    data-title="Temperature"
    data-min-value="0"
    data-max-value="50"
    data-major-ticks="[0, 5,10,15,20,25,30,35,40,45,50]"
    data-minor-ticks="2"
    data-stroke-ticks="true"
    data-highlights='[ {"from": 0, "to": 30, "color": "rgba(0,0, 255, .3)"},
        {"from": 30, "to": 50, "color": "rgba(255, 0, 0, .3)"} ]'
    data-ticks-angle="225"
    data-start-angle="67.5"
    data-color-major-ticks="#ddd"
    data-color-minor-ticks="#ddd"
    data-color-title="#eee"
    data-color-units="#ccc"
    data-color-numbers="#eee"
    data-color-plate="#2196F3"
    data-border-shadow-width="0"
    data-borders="true"
    data-needle-type="arrow"
    data-needle-width="2"
    data-needle-circle-size="7"
    data-needle-circle-outer="true"
    data-needle-circle-inner="false"
    data-animation-duration="1500"
    data-animation-rule="linear"
    data-color-border-outer="#555"
    data-color-border-outer-end="#555"
    data-color-border-middle="#555"
    data-color-border-middle-end="#555"
    data-color-border-inner="#555"
    data-color-border-inner-end="#555"
    data-color-needle-shadow-down="#333"
    data-color-needle-circle-outer="#555"
    data-color-needle-circle-outer-end="#555"
    data-color-needle-circle-inner="#555"
    data-color-needle-circle-inner-end="#555"
    data-value-box-border-radius="0"
    data-color-value-box-rect="#555"
    data-color-value-box-rect-end="#333"
></canvas>
