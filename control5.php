<?php     
  include('connectDB.php');

  if (!empty($_POST)) {
    $bt5 = $_POST['bt5'];
    $sql= "UPDATE `control` SET  bt5= '$bt5' WHERE id = 0";

    if (mysqli_query($conn, $sql)) {
        exit();
    }
    else{
      echo "Error updating record: " . mysqli_error($conn);
      exit();
    } 
  }

?>  