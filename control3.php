<?php     
  include('connectDB.php');

  if (!empty($_POST)) {
    $bt3 = $_POST['bt3'];
    $sql= "UPDATE `control` SET  bt3= '$bt3' WHERE id = 0";

    if (mysqli_query($conn, $sql)) {
        exit();
    }
    else{
      echo "Error updating record: " . mysqli_error($conn);
      exit();
    } 
  }

?>  