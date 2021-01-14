<?php
$query= $con->prepare("INSERT INTO `mybocuse` (`email`, `password`, `name`) VALUES (?,?,?)");
$email = $_POST["email"];
$psswd = $_POST["pwd"];
$name = $_POST["name"];

$query->bind_param('bbb', $email, PASSWORD_HASH($pwd, PASSWORD_DEFAULT), $name);
if ($query->execute()) {
  echo "Query executed.";
}else{
  echo "Query error.";
}
?>