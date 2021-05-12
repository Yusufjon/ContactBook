<?php
include 'dbconfig.php';
$name = $_POST['name'];
$phone = $_POST['phone'];

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `contacts`(`name`, `phone`) VALUES(?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name, $phone]);
    echo '<script language="javascript">';
    echo 'alert("Успешно зарегистрирован"); location.href="index1.php"';
    echo '</script>';	
}else{
	echo 'error';
}
?>