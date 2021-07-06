
<?php

//used to update data , called from update.php 

$conn = mysqli_connect("localhost","root","","covid_db");
	
$id = $_POST['ID'];
$Contact = $_POST['Contact'];
$TotalAvailableBeds = $_POST['beds'];
$TotalO2 = $_POST['totalO2'];
$VacantO2 = $_POST['vacantO2'];
$Total = $_POST['total'];
$Vacant = $_POST['vacant'];
$Doctors = $_POST['doctors'];

$sqlupdate = "UPDATE `data_table` SET `Contact`='$Contact',`TotalAvailableBeds`='$TotalAvailableBeds',`TotalO2`='$TotalO2',`VacantO2`='$VacantO2',`Total`='$Total',`Vacant`='$Vacant',`Doctors`='$Doctors' WHERE id='$id' ";
$update = mysqli_query($conn,$sqlupdate);

if(!$update){
  echo "Error";
}
else{
  header("Location: bedstatus.php");

}

?>