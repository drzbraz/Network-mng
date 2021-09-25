<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

if($email == ""){
	echo "<script language=javascript>alert( 'Email inválido!' );</script>";
	echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/cadastrar.html');</script>";
	
}
else if($pass == ""){
	echo "<script language=javascript>alert( 'Senha inválida!' );</script>";
	echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/cadastrar.html');</script>";

}
else{
	$pass = password_hash($pass, PASSWORD_DEFAULT);
	$con = mysqli_connect("localhost", "root", "","managernetwork");
	$sql = "INSERT INTO `user` (`user`, `senha`) VALUES ('$email', '$pass')";
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));

	if($result == 1) {
		echo "<script language=javascript>alert( 'Dados inseridos com sucesso!' );</script>";
		echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/login.html');</script>";

		
	} else {
		echo "<script language=javascript>alert( 'Ocorreu um erro!' );</script>";
		echo "<script language=javascript>window.location.replace('http://localhost/Network%20Manangment/cadastrar.html');</script>";

	}
}

?>

