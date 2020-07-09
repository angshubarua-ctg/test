<?php
$con=mysqli_connect("localhost","root","","cmpi_db");

$message="";

if(isset($_POST['btn']))
{
  $employee_name=$_POST['employee_name'];
  $mail= $_POST['mail'];
  $birthday=$_POST['birthday'];
  $contact= $_POST['contact'];
  $nid=$_POST['nid'];
  $address= $_POST['address'];
  $department=$_POST['department'];
  $degree= $_POST['degree'];
  $gender= $_POST['gender'];
$sql="INSERT INTO employees(employee_name,mail,birthday,contact,nid,address,department,degree,gender) VALUES('$employee_name','$mail','$birthday','$contact','$nid','$address','$department','$degree','$gender')";
$result = mysqli_query($con,$sql);
if($result==true)
{
  $message="Employee Details Saved!";
}
else {
  $message="Error:".mysqli_error($con);
}
$con->close();
}
?>

<div class="row"> 
    <div class="col-lg-12">
    <br>
    <p class="text-center text-success"><?php echo $message;?></p>
        <h1 class="page-header">Add Employee</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            
        <form class="form-horizontal" action="" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="employee_name">Employee Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="employee_name" placeholder="Enter employee_name"name="employee_name"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mail">E-mail:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mail" placeholder="Enter Email"name="mail">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="birthday">Birthday:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="birthday" placeholder="Year-Month-Date"name="birthday"required>
    </div>
    <label class="control-label col-sm-2" for="contact">Contact:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="contact" placeholder="Enter your contact"name="contact">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="nid">NID:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nid" placeholder="Enter NID Number"name="nid"required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="address" placeholder="Enter Your Address" name="address">
      </textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="department" placeholder="Enter Your Department"name="department"required>
    </div>
    <label class="control-label col-sm-2" for="degree">Degree:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="degree" placeholder="Enter your degree"name="degree">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-10">
      <input type="radio" id="male"name="gender"value="male"><label for="male">Male</label><br>
      <input type="radio" id="female"name="gender"value="female"><label for="female">Female</label>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default"name="btn">Save</button>
    </div>
  </div>
</form>  
        </div>
    </div>
</div>