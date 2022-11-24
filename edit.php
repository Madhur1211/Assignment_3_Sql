<?php 
//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	//Getting Post Values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $bio=$_POST['Bio'];

    //Query for data to update
     $query=mysqli_query($con, "update  tblusers set FirstName='$fname',LastName='$lname', MobileNumber='$contno', Email='$email', Bio='$bio' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>"; //JavaScript
    echo "<script type='text/javascript'> document.location ='index.php'; </script>"; //redirect to index.php (online resources)
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
   require '../inc/edit-header.php' //including header
?>
<body>
<div class="signup-form">
    <form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblusers where ID='$eid'"); //selecting all the columns from table
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Update </h2>
		<p class="hint-text">Update your info.</p>

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" value="<?php  echo $row['FirstName'];?>" required="true"></div> <!-- fetching value from user-->
				<div class="col"><input type="text" class="form-control" name="lname" value="<?php  echo $row['LastName'];?>" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" value="<?php  echo $row['MobileNumber'];?>" required="true" maxlength="10" pattern="[0-9]+">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" value="<?php  echo $row['Email'];?>" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="Bio" required="true"><?php  echo $row['Bio'];?></textarea>
        </div>   

<?php 
}?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
<!--including footer-->
<?php require '../inc/footer.php'?>
</body>
</html>