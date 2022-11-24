<!--database connection-->
<?php
$con=mysqli_connect("172.31.22.43", "Madhur200520948", "06nKABQU", "Madhur200520948");
//if connection failed
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>