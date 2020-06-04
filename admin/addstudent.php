<?php
     session_start();
    if(isset($_SESSION['uid']))
	{
	echo "";
	}
	else{
	header('location:../login.php');
	}

?>
<?php
include('header.php');
include('titlehead.php');
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Rollno</td>
               
                <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
                
            </tr>
			<tr>
                 <td>Full Name</td>
            
                 <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
                 
            </tr>
			<tr>
                <td>City</td>
                
                <td><input type="text" name="city" placeholder="Enter City" required></td>
               
            </tr> 
			<tr>
                <td>Parents Contact no</td>
                
                <td><input type="text" name="pcon" placeholder="Enter Parents Contact no" required></td>
                
            </tr>
			<tr>
                <td>Standerd</td>
               
                <td><input type="number" name="std" placeholder="Enter Standerd" required></td>
                
            </tr>
			<tr>
                <td>Image</td>
                
                <td><input type="file" name="simg" required></td>
                
            </tr>
			
			<tr>
			     <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"</td>
			</tr>
        </table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
      include('../dbcon.php');
	  $rolno=$_POST['rollno'];
	  $name=$_POST['name'];
	  $city=$_POST['city'];
	  $pcon=$_POST['pcon'];
	  $std=$_POST['std'];
	  $qry="INSERT INTO `student` (`rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('$rolno', '$name', '$city', '$pcon', '$std', 'gfdgf.jpg');";
      $run=mysqli_query($con,$qry);
	 
	  if($run==true)
	  {
		  ?>
		  <script>
		       alert('Data Inserted successfully');
		  </script>
		  <?php
	  }
	  else{
	  echo "error";
	  }
}



?>
