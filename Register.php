<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
</head>

<body>
<?php
		$email='';
		
		$pass='';
		
		$name='';
		
		
	if(isset($_POST['sbbtn'])){
		
		$email=$_POST['txemailid'];
		
		$pass=$_POST['txpass'];
		
		$name=$_POST['txname'];
		
		$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
		mysqli_query($con,"create database if not exists IMGDb") or die(mysqli_error($con));
		
		mysqli_query($con,"use IMGDb") or die(mysqli_error($con));
		
		mysqli_query($con,"create table if not exists registerTb(email varchar(200),password varchar(200), name varchar(200), primary key(email))") or die(mysqli_error($con));
		
		mysqli_query($con,"insert into registerTb(email, password, name) values('$email','$pass','$name')") or die(mysqli_error($con));
		
	}

?>







<form  action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">
	<table>
      	<tr>
  			<th>Email</th>
            <td><input type="text" name="txemailid" value="<?php echo $email; ?>" /></td>      
        </tr>
        
        <tr>
  			<th>Password</th>
            <td><input type="password" name="txpass" value="<?php echo $pass; ?>" /></td>      
        </tr>
        <tr>
        	<th>Name</th>
            <td><input type="text" name="txname" value="<?php echo $name; ?>"/></td>
        </tr>
    	<tr>
			<td><input type="submit" name="sbbtn"  /></td>
        </tr>
    
    </table>


</form>
</body>
</html>