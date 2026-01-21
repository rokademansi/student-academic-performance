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
if(empty($_POST['prno']))
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
if(empty($_POST['sbcod']))
{
$err4="subject code must exist";
$fl=1;
}
if(empty($_POST['test1']))
{
$err5="test1 must exist";
$fl=1;
}
if(empty($_POST['test2']))
{
$err6="test2 name must exist";
$fl=1;
}
if(empty($_POST['mid']))
{
$err7="middle must exist";
$fl=1;
}
if(empty($_POST['final']))
{
$err8="final must exist";
$fl=1;
}
if(empty($_POST['midper']))
{
$err9="midpercent number must exist";
$fl=1;
}
if(empty($_POST['finper']))
{
$err10="finpercent must exist";
$fl=1;
}
if(empty($_POST['diff']))
{
$err11="difference must exist";
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
<form name = frm method = post action=evaluationerror.php>
<center>
<caption><h3>Evaluation</h3></caption>
<table>
<tr>
<td> PRN no </td>
<td> <input type = text name = prno placeholder="PRN No" onkeypress="return valid1()"><?php echo $err1; ?><br></td>
</tr>
<tr>
<td> Enroll no </td>
<td> <input type = text name = enrlno placeholder="Enroll no" onkeypress="return valid1()"><?php echo $err2; ?><br></td>
</tr>
<tr>
<td> Class name </td>
<td> <input type = text name = classnm placeholder="Class name"><?php echo $err3; ?></td>
</tr>
<tr>
<td> Subject code </td>
<td> <input type = text name = sbcod placeholder="Subject code"><?php echo $err4; ?></td>
</tr>
<tr>
<td> Test-1 </td>
<td> <input type = number name = test1 placeholder="Test-1"><?php echo $err5; ?><br></td>
</tr>
<tr>
<td> Test-2 </td>
<td> <input type = number name = test2 placeholder="Test-2"><?php echo $err6; ?><br></td>
</tr>
<tr>
<td> Middle Exam </td>
<td> <input type = number name = mid placeholder="Middle Exam"><?php echo $err7; ?><br></td>
</tr>
<tr>
<td> Final Exam </td>
<td> <input type = number name = final placeholder="Final Exam"><?php echo $err8; ?><br></td>
</tr>
<tr>
<td> Middle percentage </td>
<td> <input type = number name = midper placeholder="Middle percentage"><?php echo $err9; ?><br></td>
</tr>
<tr>
<td> Final percentage </td>
<td> <input type = number name = finper placeholder="Final percentage"><?php echo $err10; ?><br></td>
</tr>
<tr>
<td> Difference </td>
<td> <input type = number name = diff placeholder="Difference"><?php echo $err11; ?><br></td>
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
$sql="insert into evaluation values('$_POST[prno]','$_POST[enrlno]','$_POST[classnm]','$_POST[sbcod]','$_POST[test1]','$_POST[test2]',
                                    '$_POST[mid]','$_POST[final]','$_POST[midper]','$_POST[finper]','$_POST[diff]')";
mysql_query($sql,$cn);
echo "data stored.....";
}
}
else
if($sb=="update")
{				
$sql="update evaluation set enrollno='$_POST[enrlno]',class='$_POST[classnm]',subcode='$_POST[sbcod]',test1='$_POST[test1]',test2 ='$_POST[test2]',mid='$_POST[mid]',final='$_POST[final]',midper='$_POST[midper]',finper='$_POST[finper]',difference='$_POST[diff]'where prnno='$_POST[prno]'";
mysql_query($sql,$cn);
echo "data updated.....";
}
else
if($sb=="delete")
{
$sql="delete from evaluation where prnno='$_POST[prno]'";
mysql_query($sql,$cn);
echo "data deleted.....";
}
else
if($sb=="display")
{
echo "<caption><h3>Evaluation</h3></caption>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>prnno</th>";
echo "<th>enrollno</th>";
echo "<th>class</th>";
echo "<th>subcode</th>";
echo "<th>test1</th>";
echo "<th>test2</th>";
echo "<th>mid</th>";
echo "<th>final</th>";
echo "<th>midper</th>";
echo "<th>finper</th>";
echo "<th>difference</th>";
echo "</tr>";
$sql="select * from evaluation";
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
echo "<caption><h3>Evaluation</h3></caption>";
echo "<center><table border=1>";
echo "<tr>";
echo "<th>prnno</th>";
echo "<th>enrollno</th>";
echo "<th>class</th>";
echo "<th>subcode</th>";
echo "<th>test1</th>";
echo "<th>test2</th>";
echo "<th>mid</th>";
echo "<th>final</th>";
echo "<th>midper</th>";
echo "<th>finper</th>";
echo "<th>difference</th>";
echo "</tr>";
$sql="select * from evaluation where prnno='$_POST[prno]'";
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