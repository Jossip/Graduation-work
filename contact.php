<head>
	<title>Info</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" type="jpg/png" href="assets/img/favicon1.png">
</head>
<?php
$link = mysqli_connect("localhost", "root", "", "royalart");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = ($_POST['name']);
$mail = ($_POST['mail']);
$choice = ($_POST['choice']);
$msg = ($_POST['msg']);
if (!empty($name)&&!empty($mail)&&!empty($choice)&&!empty($msg)) {
	$sql = "INSERT INTO contact (name, mail, choice, msg) VALUES ('$name', '$mail', '$choice', '$msg')";
	if(mysqli_query($link, $sql)){
  		echo "<h3>Thank You for choosing Royal<span>Art</span>!</h3>";
		echo "<h3>You will be redirected to homepage in <span>3</span> seconds.</h3>";
		header("Refresh:3; URL=index.html");
	} else {
		echo "<h3><span>Oops</span>! Something went wrong!</h3>";
		echo "<h3>You will be redirected to homepage in <span>3</span> seconds.</h3>";
		header("Refresh:3; URL=index.html");
	}
} else {
	echo "<h3>Please make sure to fill in all fields.</h3>";
	header("Refresh:3; URL=index.html");
}
mysqli_close($link);
?>