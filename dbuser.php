<?php
	
	$name=isset($_POST['firstname']);
	$email=isset($_POST['email']);
	$password=isset($_POST['password']);

$conn=new mysqli('localhost','root','','db2');
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	$stmt=$conn->prepare('insert into entry(firstname,email,password) values(?,?,?)');
	$stmt->bind_param('sss',$firstname,$email,$password);
	$stmt->execute();
	echo "success";
	$stmt->close();
	$conn->close();
}

?>