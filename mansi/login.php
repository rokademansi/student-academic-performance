<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fanadesh</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
             
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="studenterror.php"></a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="subjecterror.php"></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="evaluationerror.php"></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="report.php"></a>
                </li>

				  <li class="nav-item">
                  <a class="nav-link" href="login.php"></a>
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h1>
            Student Academic Performance 
          </h1>
          <p>
          </p>
          <div class="hero_btn-continer">
            
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
<html>
<head>
<title>Login</title>
</head>
<body>
<form name=frm method=post>
<center>
<caption><b>Login<b></caption>
<table>
<tr>
<td>User Id</td>
<td><input type=text name=uid></td>
</tr>
<tr>
<td>Password</td>
<td><input type=password name=psw></td>
</tr>
<tr>
<td>
             <a href="user form.html title="New user?">New User</a>
</td>
</tr>
</table>
<input type=submit name=sbm value=Go>
</center>
</form>
</body>
</html>

<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("StudentAcademicPerformance",$cn);
if(isset($_POST['sbm']))
{
$u=$_POST['uid'];
$p=$_POST['psw'];
if($u=="mansi" && $p=="rokade")
header("location:http://localhost/rokade/mansi/index.html");
else
{
$sql="select count(*) from user where userid='$_POST[uid]' and password='$_POST[psw]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$x=$row[0];
if($x==1)
{
session_start();
$_SESSION['userid']=$_POST['uid'];
header("location:http://localhost/rokade/mansi/clientindex.html");
}
else
echo "invalid userid and or password";
}
}
?>