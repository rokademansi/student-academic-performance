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
                  <a class="nav-link" href="index.html"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="studenterror.php"> Student </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="subjecterror.php"> Subject </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="evaluationerror.php"> Evaluation </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="report.php"> Report </a>
                </li>

				  <li class="nav-item">
                  <a class="nav-link" href="login.php"> Login </a>
                </li>
                   <li class="nav-item">
                  <a class="nav-link" href="logout.php"> Logout </a>
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
        
<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$err9="";
$err10="";
$err11="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['prnno']))
{
$err1="prn number must exist";
$fl=1;
}
if(empty($_POST['enrlno']))
{
$err2="enroll number must exist";
$fl=1;
}
if(empty($_POST['classnm']))
{
$err3="classname must exist";
$fl=1;
}
if(empty($_POST['div']))
{
$err4="division must exist";
$fl=1;
}
if(empty($_POST['fac']))
{
$err5="faculty must exist";
$fl=1;
}
if(empty($_POST['studnm']))
{
$err6="student name must exist";
$fl=1;
}
if(empty($_POST['gen']))
{
$err7="gender must exist";
$fl=1;
}
if(empty($_POST['cst']))
{
$err8="caste must exist";
$fl=1;
}
if(empty($_POST['cntno']))
{
$err9="contact number must exist";
$fl=1;
}
if(empty($_POST['eid']))
{
$err10="emailid must exist";
$fl=1;
}
if(empty($_POST['psw']))
{
$err11="password must exist";
$fl=1;
}
}
}
?>
<html>
<head>
<script language=javascript>
function valid1()
{
var x;
x=event.keyCode;
if(x>=48 && x<=57)
{
event.keyCode=x;
return true;
}
else
{
event.keyCode=0;
return false;
}
}
function valid2()
{
var x;
x=event.keyCode;
if((x>=65 && x<=90)||(x>=97 && x<=122)||x==32)
{
event.keyCode=x;
return true;
}
else
{
event.keyCode=0;
return false;
}
}

</script>
</head>
<body>
<form name = frm method = post action=studenterror.php>
<center>
<caption><h3>Student Information</h3></caption>
<table>
<tr>
<td> PRN no </td>
<td> <input type = text name = prnno placeholder="PRN No" onkeypress="return valid1()"><?php echo $err1; ?><br></td>
</tr>
<tr>
<td> Enroll no </td>
<td> <input type = text name = enrlno placeholder="Enroll no" onkeypress="return valid1()"><?php echo $err2; ?><br></td>
</tr>
<tr>
<td> Class name </td>
<td> <input type = text name = classnm placeholder="Class name"><?php echo $err3; ?><br></td>
</tr>
<tr>
<td> Division </td>
<td> <input type = text name = div placeholder="Division"><?php echo $err4; ?></td>
</tr>
<tr>
<td> Faculty </td>
<td> <input type = text name = fac placeholder="Faculty"><?php echo $err5; ?><br></td>
</tr>
<tr>
<td> Student Name </td>
<td> <input type = text name = studnm placeholder="Student Name" onkeypress="return valid2()"><?php echo $err6; ?><br></td>
</tr>
<tr>
<td> Gender </td>
<td> <input type = text name = gen placeholder="Gender" onkeypress="return valid2()"><?php echo $err7; ?><br></td>
</tr>
<tr>
<td> Caste </td>
<td> <input type = text name = cst placeholder="Caste"><?php echo $err8; ?></td>
</tr>
<tr>
<td> Contact no </td>
<td> <input type = text name = cntno placeholder="Contact no"><?php echo $err9; ?><br></td>
</tr>
<tr>
<td> Email id </td>
<td> <input type = text name = eid placeholder="Email id"><?php echo $err10; ?></td>
</tr>
<tr>
<td> Password </td>
<td> <input type = text name = psw placeholder="Password"><?php echo $err11; ?></td>
</tr>
</table>
<input type = submit name = sbm value = submit>
<input type = submit name = sbm value = update>
<input type = submit name = sbm value = delete>
<input type = submit name = sbm value = display>
<input type = submit name = sbm value = search>
</form>
</body>
</html>

<?php
$cn=mysql_connect("localhost","root");;
mysql_select_db("StudentAcademicPerformance",$cn);
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="submit")
{
if($fl==0)
{
$sql="insert into student values('$_POST[prnno]','$_POST[enrlno]','$_POST[classnm]','$_POST[div]','$_POST[fac]','$_POST[studnm]',
                                    '$_POST[gen]','$_POST[cst]','$_POST[cntno]','$_POST[eid]','$_POST[psw]')";
mysql_query($sql,$cn);
echo "data stored.....";
}
}
else
if($sb=="update")
{				
$sql="update student set enrollno='$_POST[enrlno]',class='$_POST[classnm]',division='$_POST[div]',faculty='$_POST[fac]',studentname='$_POST[studnm]',
gender='$_POST[gen]',caste='$_POST[cst]',contno='$_POST[cntno]',emailid='$_POST[eid]',password='$_POST[psw]' where prno='$_POST[prnno]'";
mysql_query($sql,$cn);
echo "data updated.....";
}
else
if($sb=="delete")
{
$sql="delete from student where prno='$_POST[prnno]'";
mysql_query($sql,$cn);
echo "data deleted.....";
}
else
if($sb=="display")
{
echo "<caption><h3>Student Information</h3></caption>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>prno</th>";
echo "<th>enrollno</th>";
echo "<th>class</th>";
echo "<th>division</th>";
echo "<th>faculty</th>";
echo "<th>studentname</th>";
echo "<th>gender</th>";
echo "<th>caste</th>";
echo "<th>contno</th>";
echo "<th>emailid</th>";
echo "<th>password</th>";
echo "</tr>";
$sql="select * from student";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<caption><h3>Student Information</h3></caption>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>prno</th>";
echo "<th>enrollno</th>";
echo "<th>class</th>";
echo "<th>division</th>";
echo "<th>faculty</th>";
echo "<th>studentname</th>";
echo "<th>gender</th>";
echo "<th>caste</th>";
echo "<th>contno</th>";
echo "<th>emailid</th>";
echo "<th>password</th>";
echo "</tr>";

$sql="select * from student where prno='$_POST[prnno]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>