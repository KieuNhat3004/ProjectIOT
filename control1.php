<?php     
  include('connectDB.php');

  if (!empty($_POST)) {
    $bt1 = $_POST['bt1'];
    $sql= "UPDATE `control` SET  bt1= '$bt1' WHERE id = 0";

    if (mysqli_query($conn, $sql)) {
        exit();
    }
    else{
      echo "Error updating record: " . mysqli_error($conn);
      exit();
    } 
  }

?>  