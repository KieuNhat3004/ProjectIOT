<?php     
  include('connectDB.php');

  if (!empty($_POST)) {
    $bt2 = $_POST['bt2'];
    $sql= "UPDATE `control` SET  bt2= '$bt2' WHERE id = 0";

    if (mysqli_query($conn, $sql)) {
        exit();
    }
    else{
      echo "Error updating record: " . mysqli_error($conn);
      exit();
    } 
  }

?> 