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
<form name = frm method = post action=student3.php>
<center>
<table>
<caption><h3>Student Information</h3></caption>
<tr>
<td> PRN no </td>
<td> <input type = text name = prnno placeholder="PRN No" onkeypress="return valid1()"><br></td>
</tr>
<tr>
<td> Enroll no </td>
<td> <input type = text name = enrlno placeholder="Enroll no" onkeypress="return valid1()"><br></td>
</tr>
<tr>
<td> Class name </td>
<td> <input type = text name = classnm placeholder="Class name"><br></td>
</tr>
<tr>
<td> Division </td>
<td> <input type = text name = div placeholder="Division"></td>
</tr>
<tr>
<td> Faculty </td>
<td> <input type = text name = fac placeholder="Faculty"><br></td>
</tr>
<tr>
<td> Student Name </td>
<td> <input type = text name = studnm placeholder="Student Name" onkeypress="return valid2()"><br></td>
</tr>
<tr>
<td> Gender </td>
<td> <input type = text name = gen placeholder="Gender" onkeypress="return valid2()"><br></td>
</tr>
<tr>
<td> Caste </td>
<td> <input type = text name = cst placeholder="Caste"></td>
</tr>
<tr>
<td> Contact no </td>
<td> <input type = text name = cntno placeholder="Contact no"><br></td>
</tr>
<tr>
<td> Email id </td>
<td> <input type = text name = eid placeholder="Email id"></td>
</tr>
<tr>
<td> Password </td>
<td> <input type = text name = psw placeholder="Password"></td>
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
$sql="insert into student values('$_POST[prnno]','$_POST[enrlno]','$_POST[classnm]','$_POST[div]','$_POST[fac]','$_POST[studnm]',
                                    '$_POST[gen]','$_POST[cst]','$_POST[cntno]','$_POST[eid]','$_POST[psw]')";
mysql_query($sql,$cn);
echo "data stored.....";
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
echo "<center><table border=1>";
echo "<caption><h3>Student Information</h3></caption>";
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
echo "<center><table border=1>";
echo "<caption><h3>Student Information</h3></caption>";
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