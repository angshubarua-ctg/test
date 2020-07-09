<?php
$con=mysqli_connect("localhost","root","","cmpi_db");

$sql="SELECT * FROM brands";
$result = mysqli_query($con,$sql);
$message = '';
if(isset($_POST['btn']))
{
    $id= $_POST['id'];
    $brand_name = $_POST['brand_name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $q = "UPDATE brands SET brand_name='$brand_name',description='$description',status='$status'WHERE id='$id'";
$result = mysqli_query($con,$q);

if($result===true)
{
    $message = "Update Successful!";
    $sql="SELECT * FROM brands";
    $result = mysqli_query($con,$sql);
}
else{
    $message = "Error";
}
}

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Show Brand</h1>
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
    <th>Description</th>
    <th>Status</th>
    <th>Action</th>
</tr>
<?php
while($row = $result->fetch_assoc())
{
   ?>
   <tr> 
   <td><?php echo $row['id']; ?></td>
   <td><?php echo $row['brand_name']; ?></td>
   <td><?php echo $row['description']; ?></td>
   <td><?php echo $row['status']; ?></td>
   <td>
   <a class="btn btn-primary" href="index.php?id=brand/edit-brand&cat_id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
   <a class="btn btn-danger"href="index.php?id=brand/delete-brand&cat_id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
   </td>
   </tr>
   <?php
}
?>
       </table>
    </div>
</div>