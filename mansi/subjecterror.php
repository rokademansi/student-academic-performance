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
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['srno']))
{
$err1="srno must exist";
$fl=1;
}
if(empty($_POST['class']))
{
$err2="class must exist";
$fl=1;
}
if(empty($_POST['subcd']))
{
$err3="subjectcode must exist";
$fl=1;
}
if(empty($_POST['discr']))
{
$err4="discription must exist";
$fl=1;
}
if(empty($_POST['forsem']))
{
$err5="semister must exist";
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
<form name = frm method = post action=subjecterror.php>
<center>
<caption><h3>Subjects</h3></caption>
<table>
<tr>
<td> Srno </td>
<td> <input type = number name = srno placeholder="Srno" onkeypress="return valid1()"><?php echo $err1; ?><br></td>
</tr>
<tr>
<td> Class </td>
<td> <input type = text name = class placeholder="Class"><?php echo $err2; ?><br></td>
</tr>
<tr>
<td> Subject code </td>
<td> <input type = text name = subcd placeholder="Subject code"><?php echo $err3; ?><br></td>
</tr>
<tr>
<td> Description </td>
<td> <input type = text name = discr placeholder="Description"><?php echo $err4; ?></td>
</tr>
<tr>
<td> Forsem </td>
<td> <input type = text name = forsem placeholder="Forsem"><?php echo $err5; ?></td>
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
$sql="insert into subject values('$_POST[srno]','$_POST[class]','$_POST[subcd]','$_POST[discr]','$_POST[forsem]')";
mysql_query($sql,$cn);
echo "data stored.....";
}
}
else
if($sb=="update")
{				
$sql="update subject set class='$_POST[class]',subcode='$_POST[subcd]',description='$_POST[discr]',forsem='$_POST[forsem]'where srno='$_POST[srno]'";
mysql_query($sql,$cn);
echo "data updated.....";
}
else
if($sb=="delete")
{
$sql="delete from subject where srno='$_POST[srno]'";
mysql_query($sql,$cn);
echo "data deleted.....";
}
else
if($sb=="display")
{
echo "<caption><h3>Subject Information</h3></caption>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>srno</th>";
echo "<th>class</th>";
echo "<th>subcode</th>";
echo "<th>description</th>";
echo "<th>forsem</th>";
echo "</tr>";
$sql="select * from subject";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<caption><h3>Subject Information</h3></caption>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>srno</th>";
echo "<th>class</th>";
echo "<th>subcode</th>";
echo "<th>description</th>";
echo "<th>forsem</th>";
echo "</tr>";
$sql="select * from subject where srno='$_POST[srno]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>