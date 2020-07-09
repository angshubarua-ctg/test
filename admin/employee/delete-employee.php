<?php
$emp_id = $_GET['emp_id'];
$con=mysqli_connect("localhost","root","","cmpi_db");
$sql = "DELETE FROM employees WHERE id ='$emp_id'";
$result = mysqli_query($con,$sql);
if($result===true){
    echo"<h1 class='text-success text-center'>Record Deleted Successfully!</h1> ";
}
else{
    echo"Error:";
}
$con->close();
?>
<a class="btn btn-primary" href="index.php?id=employee/show-employee">Back to Employee List</a>





