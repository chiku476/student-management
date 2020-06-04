<!DOCTYPE html>
<html>
    <head> 
	     <meta charset="UTF-8">
	     <title>student management system</title>
	</head>
    <body>
	  <h3 align="right" style="margin-right:20px"> <a href="login.php">Admin login</h5> 
	  <h1 align="center">Welcome to Student Management System</h1>
	      <form method="post"action="index.php">
	           <table border="1" style="width:50%;" align="center">
	               <tr>
	                  <td colspan="2" align="center">Student Information</td>
	               </tr>
	               <tr>
	                   <td> Choose Standerd</td>
					      <td>
						    <select name="std" required>
							     <option value="1">1st</option>
								 <option value="2">2nd</option>
								 <option value="3">3rd</option>
							     <option value="4">4th</option>
								 <option value="5">5th</option>
								 <option value="6">6th</option>
								 <option value="7">7th</option>
							  </select>
						 </td>
	               </tr>
	               <tr>
	                   <td>Enter Rollno</td>
					   <td> <input type="text" name="Rollno" required="required"></td>
	               </tr>
	                <tr>
	                    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"</td>
	                </tr>
	           </table>
		   </form>	   
	</body>
</html>