<?php
//connection
$conn = mysqli_connect("localhost","root","","covid_db");
$sql = "SELECT * FROM data_table";
$result = mysqli_query($conn,$sql);

$id = $_POST['id'];	
$Hospitals = $_POST['Hospitals'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$TotalAvailableBeds = $_POST['beds'];
$TotalO2 = $_POST['totalO2'];
$VacantO2 = $_POST['vacantO2'];
$Total = $_POST['total'];
$Vacant = $_POST['vacant'];
$Doctors = $_POST['doctors'];

$sql = "INSERT INTO `data_table`(`Hospitals`, `Address`, `Contact`, `TotalAvailableBeds`, `TotalO2`, `VacantO2`, `Total`, `Vacant`, `Doctors`) VALUES ('$Hospitals','$Address','$Contact','$TotalAvailableBeds','$TotalO2','$VacantO2','$Total','$Vacant','$Doctors')";

$insert = mysqli_query($conn,$sql);
if(!$insert){
  echo "Error";
  echo $id;
}
else{
  header("Location: bedstatus.php");

}
?>