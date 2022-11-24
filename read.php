<?php
include('dbconnection.php');//including database connection
require '../inc/read-header.php'//including header
?>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Profile</b></h2>
                    </div>
<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblusers where ID =$vid");//feting columns
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

                     <div class="col-sm-7" align="right">
                        <a href="edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="btn btn-primary"><span>Edit User Details</span></a>
                                        
                    </div>
                </div>
            </div>
<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
<tbody>
    <tr>
           <th width="200">Creation Date</th>
           <td><?php  echo $row['CreationDate'];?></td> <!--Printing user data-->
    </tr>

 <tr>
    <th>First Name</th>
    <td><?php  echo $row['FirstName'];?></td>
    <th>Last Name</th>
    <td><?php  echo $row['LastName'];?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
    <th>Mobile Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
  </tr>
  <tr>
    <th>Bio</th>
    <td><?php  echo $row['Bio'];?></td>
 
  </tr>
<?php 
$cnt=$cnt+1;
}?>
                 
</tbody>
</table>
       
        </div>
    </div>
</div>
<?php require '../inc/footer.php'?><!--Including footer-->
</body>
</html>