<?php 
//Database Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $bio=$_POST['Bio'];
//checking if empty
if(empty($fname))
{
echo "First Name Required";
}
else
{
// query to insert data
$query=mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Bio) value('$fname','$lname', '$contno', '$email', '$bio' )");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";//javaScript
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
require '../inc/insert-header.php'//including header
?>
<body>
<div class="signup-form">
    <form  method="POST" enctype="multipart/form-data" >
		<h2>Fill Data</h2>
		<p class="hint-text">Complete the profile</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
			</div>        	
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="Bio" placeholder="Enter Your Bio" required="true"></textarea>
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
	<div class="text-center">View user list!!  <a href="index.php">View</a></div>
</div>
<?php require '../inc/footer.php'?><!--including footer-->
</body>
</html>