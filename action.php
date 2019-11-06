<?php
	$server = "localhost";
	$username = "root";
	$password = "";
  $dbname="crud";
	$connection = mysqli_connect(
    	$server,$username,$password,$dbname
	);
	if(!$connection){
    	die('ERROR: coonection failed'.mysqli_connect_error());
	}
    
	if(isset($_POST['submit']))
	{
    	$name = $_POST['fullname'];
    	$address = $_POST['add'];
    	$salary = $_POST['salary'];
    	//echo $name;
   	 
    	$insert_query = "INSERT INTO employee VALUES('$name','$address','$salary')";
   	 
    	if(mysqli_query($connection,$insert_query)){
        	//echo "Value added into database succesfully";
    	}
   	 
    	$query = "SELECT * from employee";
    	$result_query = mysqli_query($connection,$query);
   	 
    	if(mysqli_num_rows($result_query) > 0)
    	{
   		 echo "<table border=1>";
        	while($row = mysqli_fetch_assoc($result_query)){
            	echo "<tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['salary']."</td></tr>";
        	}
        	echo "</table>";
    	}
	}
?>
