<?php
$ID = $_POST['ID'];
$connection = mysqli_connect('localhost','root','','project_hr');
if(!$connection)
    die("could not connect".mysqli_connect_error());
$sql = "DELETE FROM personal_data WHERE ID='$ID'";
$sql2 = "DELETE FROM employee WHERE ID='$ID'";
if(mysqli_query($connection,$sql) && mysqli_query($connection,$sql2)){
    echo "<h3> record remove successfully."
         ." please browse your localhost php personal_data"
         ." to view updated data</h3>";
}else{
    echo "ERROR: sorry process failed. "
    . mysqli_error($connection);
    
}

?>