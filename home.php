<?php session_start();

//Always place this code at the top of the Page

if (!isset($_SESSION['id'])) {
    // Redirection to login page twitter or facebook
    header("location: index.php");
}

echo '<div>';
echo '<center>';
echo '<img id="logo2" src="ou3.png" data-hi-res="" alt="" style="width:329px; height:221px;" />';
echo '</center>';
echo '<center>';
echo '<img src="developers-logo.png" width="200" height="48">';
echo '</center>';
echo '<br>';
echo '</div>';
echo '<h1>Welcome</h1>';
echo 'id : ' . $_SESSION['id'];
echo '<br/>Name : ' . $_SESSION['username'];
echo '<br/>Email : ' . $_SESSION['email'];
echo '<br/>You are login with : ' . $_SESSION['oauth_provider'];
?>
<html>
<head>
<meta charset="UTF-8">
<link href="google.ico" rel="shortcut icon">
<title>OpenID Testing</title>
<style>
div.code {
	font-family: Courier, monospace, Courier New;
	font-size: 13px;
	color: #000;
	border: dashed 2px #dedede;
	padding: 10px;
	line-height: 16px;
	word-wrap: break-word;
}
</style>
</head>
<body style="margin:0px auto; width:800px;text-align:left;font-family:arial">
<?php
$id=$_SESSION['id'];
$username=$_SESSION['username'];
$email=$_SESSION['email'];
$oauth=$_SESSION['oauth_provider'];
?>
<br><br>
<div class='code'> <b>SQL Query </b>:<br/>
insert into users(id,username,email,oauth) values("<span style="color:#cc0000"><?php echo $id; ?></span>","<span style="color:#cc0000"> <?php echo $username; ?></span>","<span style="color:#cc0000"> <?php echo $email; ?></span>","<span style="color:#cc0000"> <?php echo $oauth; ?></span>")'; </div>

<br>
<?php
echo '<br/>Logout from <a href="logout.php?logout">' . $_SESSION['oauth_provider'] . '</a>';
 ?>
</body>
</html>