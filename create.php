<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $state = $_POST['state'];

    $city = $_POST['city'];

    $number = $_POST['number'];

    $home  = $_POST['hno'];

    $Aadhar  = $_POST['ano'];

    $sql = "INSERT INTO `demo` ( `name`, `state`, `city`, `number`, `home no`, `Aadhar no`) 
          VALUES ( 'name', 'state', 'city', $number, 'hno', 'ano')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>Ragistration Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

     name:<br>

    <input type="text" name="name">

    <br>

    state:<br>

    <input type="text" name="state">

    <br>

    city:<br>

    <input type="text" name="city">

    <br>

    number:<br>

    <input type="number" name="number">

    <br>

    home :<br>

    <input type="number" name="hno">

    <br>
    Aadhar :<br>

     <input type="number" name="Aadhar no">

    <br>
    <br>

    <input type="submit" name="submit" value="submit">


  </fieldset>

</form>

</body>

</html>