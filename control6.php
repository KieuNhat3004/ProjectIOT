<?php     
  include('connectDB.php');

  if (!empty($_POST)) {
    $bt6 = $_POST['bt6'];
    $sql= "UPDATE `control` SET  bt6= '$bt6' WHERE id = 0";

    if (mysqli_query($conn, $sql)) {
        exit();
    }
    else{
      echo "Error updating record: " . mysqli_error($conn);
      exit();
    } 
  }

?>  