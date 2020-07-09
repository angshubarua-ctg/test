<?php
$con=mysqli_connect("localhost","root","","cmpi_db");

$sql="SELECT * FROM employees";
$result = mysqli_query($con,$sql);
$message = '';
if(isset($_POST['btn']))
{
    $id= $_POST['id'];
    $employee_name = $_POST['employee_name'];
    $mail = $_POST['mail'];
    $birthday = $_POST['birthday'];
    $contact = $_POST['contact'];
    $nid = $_POST['nid'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $degree= $_POST['degree'];
    $gender= $_POST['gender'];
    $q = "UPDATE employees SET employee_name='$employee_name',mail='$mail',birthday='$birthday' contact='$contact',nid='$nid',address='$address',department='$department' degree='$degree',gender='$gender'WHERE id='$id'";
$result = mysqli_query($con,$q);

if($result===true)
{
    $message = "Update Successful!";
    $sql="SELECT * FROM employees";
    $result = mysqli_query($con,$sql);
}
else{
    $message = "Error";
}
}

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Show Employee Details</h1>
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
    <th>Email</th>
    <th>BirthDay</th>
    <th>Contact</th>
    <th>NID</th>
    <th>Address</th>
    <th>Department</th>
    <th>Degree</th>
    <th>Gender</th>
    <th>Option</th>
</tr>
<?php
while($row = $result->fetch_assoc())
{
    ?>
   <tr> 
   <td><?php echo $row['id'];?></td>
   <td><?php echo $row['employee_name']; ?></td>
   <td><?php echo $row['mail']; ?></td>
   <td><?php echo $row['birthday']; ?></td>
   <td><?php echo $row['contact']; ?></td>
   <td><?php echo $row['nid']; ?></td>
   <td><?php echo $row['address']; ?></td>
   <td><?php echo $row['department']; ?></td>
   <td><?php echo $row['degree']; ?></td>
   <td><?php echo $row['gender']; ?></td>
<td>
   <a class="btn btn-primary" href="index.php?id=employee/edit-employee&emp_id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
   <a class="btn btn-danger"href="index.php?id=employee/delete-employee&emp_id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
   </td>
   </tr>
   <?php
}
?>
       </table>
    </div>
</div>

