<?php

$email = $_POST['email'];
$pass = $_POST['pass'];
$_SESSION['email'] = $email;
if($email == ""){
	echo "<script language=javascript>alert( 'Email inválido!' );</script>";
	echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/login.html');</script>";
	
}
else if($pass == ""){
	echo "<script language=javascript>alert( 'Senha inválida!' );</script>";
	echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/login.html');</script>";

}
else{
	$con = mysqli_connect("localhost", "root", "","managernetwork");
	$sql = "Select id,user,senha FROM `user` WHERE `user` = '$email' LIMIT 1";
	$result = mysqli_query($con,$sql);
	if($result){
		$row_usuario = mysqli_fetch_assoc($result);
		if(password_verify($pass,$row_usuario['senha'])){
			echo "<script language=javascript>alert( 'Sucesso !' );</script>";
			echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/MainMenu.php?email=".$email."');</script>";
		}
		else{
			echo "<script language=javascript>alert( 'Login não existe !' );</script>";
			echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/login.html');</script>";
		}
	}

}

?>

