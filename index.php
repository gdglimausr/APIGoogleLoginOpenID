<?php session_start();
//Always place this code at the top of the Page

if (isset($_SESSION['id'])) {
    // Redirection to login page twitter or facebook
    header("location: home.php");
}

if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'google') {
        header("Location: login-google.php");
    } 
}
?>
<html>
<head>
<meta charset="UTF-8">
<link href="google.ico" rel="shortcut icon">
<title>OpenID Testing</title>
<style type="text/css">
    body{
        background: #fff;
    }
    #buttons
    {
        text-align:center
    }
    #buttons img,
    #buttons a img
    { border: none;}
    h1
    {
        font-family:Arial, Helvetica, sans-serif;
        color:#000;
    }

</style>
</head>
<body>
<h1 align="center">Google OpenID Connect</h1>

<div><center><img id="logo2" src="ou3.png" data-hi-res="" alt="" style="width:329px; height:221px;" /></center></div>
<div id="buttons" style="margin:0px auto; width:800px;text-align:center;font-family:arial">
    <!--<h1>Google OpenID Connect </h1>-->
    <a href="?login&oauth_provider=google"><img src="images/googlebtn.png"></a><br/>
    <br />
    <!--<a href="http://www.9lessons.info">http://9lessons.info</a>--->
</div>
<br />
<div align="center"><img src="developers-logo.png" width="200" height="48"></div>
<p align="center"><a href='https://github.com/daulys/GoogleOpenIDLogin'>https://github.com/daulys/GoogleOpenIDLogin</a><p>
<div>


</body>
</html>