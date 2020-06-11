<?php
if(isset($_POST['submit']))
{
      include('../dbcon.php');
	  $rolno=$_POST['rollno'];
	  $name=$_POST['name'];
	  $city=$_POST['city'];
	  $pcon=$_POST['pcon'];
	  $std=$_POST['std'];
	  $id=$_POST['sid'];
	  $imagename=$_FILES['simg']['name'];
	  $tampname=$_FILES['simg']['tmp_name'];
	  move_uploaded_file($tampname,"../dataimg/$imagename");
	  $qry="UPDATE `student` SET `rollno` = '$rolno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standerd` = '$std', `image` = '$imagename' WHERE `id` =$id;";
      $run=mysqli_query($con,$qry);
	 
	  if($run==true)
	  {
		  ?>
		  <script>
		       alert('Data Update Successfully');
			   window.open('updateform.php?sid=<?php echo $id;?>','_self');
		  </script>
		  <?php
	  }
}
?>