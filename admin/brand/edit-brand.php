<?php
$bnd_id = $_GET['bnd_id'];
$con=mysqli_connect("localhost","root","","cmpi_db");
$sql = "SELECT * FROM brands WHERE id ='$bnd_id'";
$result = mysqli_query($con,$sql);
$brand_name='';
$description='';
$status='';
$message='';
while($row = $result->fetch_assoc())
{
    $id= $row['id'];
    $brand_name= $row['brand_name'];
    $description= $row['description'];
    $status= $row['status'];
}
?>



<div class="row"> 
    <div class="col-lg-12">
    <br>
    <p class="text-center text-success"><?php echo $message;?></p>
        <h1 class="page-header">Edit Brand</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            
        <form class="form-horizontal" action="index.php?id=brand/show-brand" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="brand_name">Brand Name:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="brand_name" value="<?php echo $brand_name;?>"name="brand_name"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="description">Description:</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="description" name="description"><?php echo $description;?>
      </textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="status">Status:</label>
    <div class="col-sm-10">
      <select  class="form-control" id="status" name="status"required>
    
      <option value="0"<?php if ($status=='0') echo 'selected';?>>Unpublished</option>
      <option value="1"<?php if ($status=='1') echo 'selected';?>>Published</option>

      </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default"name="btn">Update</button>
    </div>
  </div>
</form>  
        </div>
    </div>
</div>