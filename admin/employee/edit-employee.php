<?php
$emp_id = $_GET['emp_id'];
$con=mysqli_connect("localhost","root","","cmpi_db");
$sql = "SELECT * FROM employees WHERE id ='$emp_id'";
$result = mysqli_query($con,$sql);
$employee_name='';
$mail='';
$birthday='';
$contact='';
$nid='';
$address='';
$department='';
$degree='';
$gender='';
$message='';
while($row = $result->fetch_assoc())
{
    $id= $row['id'];
    $employee_name= $row['employee_name'];
    $mail = $row['mail'];
    $birthday = $row['birthday'];
    $contact = $row['contact'];
    $nid = $row['nid'];
    $address = $row['address'];
    $department = $row['department'];
    $degree= $row['degree'];
    $gender= $row['gender'];
}
?>



<div class="row"> 
    <div class="col-lg-12">
    <br>
    <p class="text-center text-success"><?php echo $message;?></p>
        <h1 class="page-header">Edit Employee Details</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            
        <form class="form-horizontal" action="index.php?id=employee/show-employee" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="employee_name">Employee Name:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="employee_name" value="<?php echo $employee_name;?>"name="employee_name"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mail">E-mail:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="mail" value="<?php echo $mail;?>"name="mail"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="birthday">Birthday:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="birthday" value="<?php echo $birthday;?>"name="birthday"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="contact" value="<?php echo $contact;?>"name="contact"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nid">NID:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="nid" value="<?php echo $nid;?>"name="nid"required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="address" value="<?php echo $address;?>"name="address"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="department" value="<?php echo $department;?>"name="department"required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="degree">Degree:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="text" class="form-control" id="degree" value="<?php echo $degree;?>"name="degree"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" id="id" value="<?php echo $id;?>"name="id"required>
      <input type="radio"  id="male" name="gender"value="male"><?php echo $gender;?><label for="male">male</label><br>
      <input type="radio" id="female"name="gender"value="female"><?php echo $gender;?><label for="female">Female</label>
    </div>
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