<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if(isset($_GET[l]) && isset($_GET[i])){
$con=mysqli_connect("mysql.hostinger.in","u146528374_naam","p1nd4k4slkkr","u146528374_naam");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to redirect";
  }
$rawhead = "";
foreach (getallheaders() as $name => $value) {
    $rawhead = $rawhead . "\n" . $name . ": " . $value;
}

// Perform queries 
mysqli_query($con,"INSERT INTO `u146528374_naam`.`reqlog` (`ID`, `link`, `request`) VALUES (NULL, '" . $_GET[i] . "', '" . $rawhead . "');");

mysqli_close($con);
header("Location: " . $_GET[l]);
die();

}else{
echo "Failed to redirect";
}
?>