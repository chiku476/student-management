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
?>
       <div class="admintitle" align="center">
			<h4><a href="logout.php" style="float:right;margin-right:40px;color:#fff;font-size:20px;">Logout</a></h4>
             <h1>Welcome To Admin Dashboard</h1>     
	 </div>
	   <div class="dashboard" >
	        <table align="center" >
	           <tr>
	               <td> <a href="addstudent.php">Insert Student Details</a></td>
	           </tr>
	           <tr>
	                <td> <a href="updatestudent.php">Update Student Details</a></td>
	           </tr>
	           <tr>
	                <td> <a href="deletestudent.php">Delete Student Details</a></td>
	          </tr>
	      </table>
	   </div>
</body>
</html>