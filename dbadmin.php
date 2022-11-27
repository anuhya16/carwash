<?php
	
	$name=isset($_POST['firstname']);
	$email=isset($_POST['email']);
	$password=isset($_POST['password']);
	$adminId=isset($_POST['AdminId']);

$conn=new mysqli('localhost','root','','db2');
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	$stmt=$conn->prepare('insert into entry(firstname,email,password,AdminId) values(?,?,?,?)');
	$stmt->bind_param('ssss',$firstname,$email,$password,$admidId);
	$stmt->execute();
	echo "success";
	$stmt->close();
	$conn->close();
}

?>