<?php     
  include('connectDB.php');

  if (!empty($_POST)) {
    $bt4 = $_POST['bt4'];
    $sql= "UPDATE `control` SET  bt4= '$bt4' WHERE id = 0";

    if (mysqli_query($conn, $sql)) {
        exit();
    }
    else{
      echo "Error updating record: " . mysqli_error($conn);
      exit();
    } 
  }

?>  