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
<form name = frm method=post action=User3.php>
<center>
<table>
<caption><h3>User</h3></caption>
<tr>
<td> User id </td>
<td> <input type = text name=uid placeholder="User id" onkeypress="return valid1()"><br></td>
</tr>
<tr>
<td> User Name </td>
<td> <input type = text name=unm placeholder="User Name" onkeypress="return valid2()"><br></td>
</tr>
<tr>
<td> Contact no. </td>
<td> <input type = text name=cnt placeholder="Contact no"><br></td>
</tr>
<tr>
<td> Password </td>
<td> <input type = text name=psw placeholder="Password"><br></td>
</tr>
<tr>
<td> E-mail id </td>
<td> <input type = text name=eml placeholder="E-mail id"></td>
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
$sql="insert into user values('$_POST[uid]','$_POST[unm]','$_POST[cnt]','$_POST[psw]','$_POST[eml]')";
mysql_query($sql,$cn);
echo "data stored.....";
}
else
if($sb=="update")
{				
$sql="update user set username='$_POST[unm]',contno='$_POST[cnt]',password='$_POST[psw]',emailid='$_POST[eml]'where userid='$_POST[uid]'";
mysql_query($sql,$cn);
echo "data updated.....";
}
else
if($sb=="delete")
{
$sql="delete from user where userid='$_POST[uid]'";
mysql_query($sql,$cn);
echo "data deleted.....";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption><h3>User Information</h3></caption>";
echo "<tr>";
echo "<th>username</th>";
echo "<th>userid</th>";
echo "<th>contno</th>";
echo "<th>password</th>";
echo "<th>emailid</th>";
echo "</tr>";
$sql="select * from user";
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
echo "<center><table border=1>";
echo "<caption><h3>User Information</h3></caption>";
echo "<tr>";
echo "<th>username</th>";
echo "<th>userid</th>";
echo "<th>contno</th>";
echo "<th>password</th>";
echo "<th>emailid</th>";
echo "</tr>";
$sql="select * from user where userid='$_POST[uid]'";
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