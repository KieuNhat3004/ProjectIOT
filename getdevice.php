<?php
    include 'connectDB.php';
    header("Content-Type: application/json");


    $a=$conn->query("SELECT * FROM `control` WHERE id = 0");

    $row = $a->fetch_assoc();

    $data= array("bt1" => $row['bt1'], "bt2" => $row['bt2'], "bt3" => $row['bt3'], "bt4" => $row['bt4'], "bt5" => $row['bt5'], "bt6" => 
    $row['bt6']);

    echo json_encode($data);
?>      