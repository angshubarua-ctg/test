<?php
$con=mysqli_connect("localhost","root","","cmpi_db");

$sql="SELECT * FROM employees-salary";
$result = mysqli_query($con,$sql);
$message = '';
if(isset($_POST['btn']))
{
    $id= $_POST['id'];
    $employee_name = $_POST['employee_name'];
    
    $q = "UPDATE employees-salary SET employee_name='$employee_name'WHERE id='$id'";
$result = mysqli_query($con,$q);

if($result===true)
{
    $message = "Update Successful!";
    $sql="SELECT * FROM employees-salary";
    $result = mysqli_query($con,$sql);
}
else{
    $message = "Error";
}
}

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Show Employee Salary</h1>
        <br> <br>
        <?php echo $message;?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
       <table class="table table-sm table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>

</tr>
<?php
while($row = $result->fetch_assoc())
{
   ?>
   <tr> 
   <td><?php echo $row['id']; ?></td>
   <td><?php echo $row['category_name']; ?></td>

   </tr>
   <?php
}
?>
       </table>
    </div>
</div>