<?php 
$server ="localhost"; 
$user="root"; 
$pwd=""; 
$dbname="student"; 
$con=mysqli_connect($server,$user,$pwd,$dbname); 
 
if($con) 
{	 
if(isset($_POST["INSERT"]))	 
{ echo "Connection Established"; 
 
        $fname=$_POST["fname"]; 
        $mname=$_POST["mname"]; 
        $lname=$_POST["lname"]; 
        $mno=$_POST["mno"]; 
 
        //echo $fn.$mn.$ln.$mno; 
        $sql="insert into student_details values('$fname','$mname','$lname','$mno')";         echo $sql; 
         if(mysqli_query($con,$sql)) 
        { 
         echo"Record added";	 
        } 
        else 
{ 
 
         echo"Record not added";	 
        } 
} 
 
if(isset($_POST["UPDATE"]))  
{ echo "Connection Established"; 
 
        $fname=$_POST["fname"]; 
        $mname=$_POST["mname"]; 
        $lname=$_POST["lname"]; 
       $mno=$_POST["mno"]; 
        //echo $fn.$mn.$ln.$mno; 
 
        $sql="update student_details set Middle_Name='$mname',Last_Name='$lname',Mobile_No='$mno' where First_Name='$fname'";         echo $sql; 
        if(mysqli_query($con,$sql)) 
 
       { 
         echo"Record updated"; 
     } 
 
        else	 
       { 
         echo"Record not updated"; 
       } 
    } 
 
if(isset($_POST["DELETE"])) 
 
{ echo "Connection Established"; 
         $fname=$_POST["fname"]; 
        $mname=$_POST["mname"]; 
        $lname=$_POST["lname"]; 
        $mno=$_POST["mno"]; 
      //echo $fn.$mn.$ln.$mno; 
        $sql="delete from student_details where First_Name='$fname'";         echo $sql; 
        if(mysqli_query($con,$sql)) 
        { 
          echo"Record Deleted"; 
        }         else 
        { 
          echo"Record not deleted"; 
        } 
    } 
 
if(isset($_POST["DISPLAY"])) 
  
{ 
      echo "Connection Established"; 
  
       $fname=$_POST["fname"]; 
       $mname=$_POST["mname"]; 
       $lname=$_POST["lname"]; 
       $mno=$_POST["mno"]; 	 
       $sql = "SELECT * from student_details"; 
       $result_query = mysqli_query($con,$sql); 
 	  
if(mysqli_num_rows($result_query) > 0) 
 	{ 
 	 echo "<table border=1>"; 
 	echo "<tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Mobile No</th> 
</tr>";               while($row = mysqli_fetch_assoc($result_query)) 
               { 
 	echo "<tr><td>".$row['fname']."</td><td>".$row['mname']."</td><td>".$row['lname']."</td><td>".$row['mno']."</td></tr>"; 
 	} 
 	echo "</table>"; 
 	}	 
} 
} 
 
else { 
echo "Connection Failed"; 
} 
?> 
 
<style> table { 
  border-collapse: collapse; 
  width: 100%; 
} 
 
th, td {   text-align: left;   padding: 8px; 
} 
 
tr:nth-child(even){background-color: #f2f2f2} 
 
th { 
  background-color: #4CAF50; 
  color: white; 
} 
</style> 
