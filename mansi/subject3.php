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
<form name = frm method = post action=subject3.php>
<center>
<table>
<caption><h3>Subjects</h3></caption>
<tr>
<td> Srno </td>
<td> <input type = number name = srno placeholder="Srno" onkeypress="return valid1()"><br></td>
</tr>
<tr>
<td> Class </td>
<td> <input type = text name = class placeholder="Class"><br></td>
</tr>
<tr>
<td> Subject code </td>
<td> <input type = text name = subcd placeholder="Subject code"><br></td>
</tr>
<tr>
<td> Description </td>
<td> <input type = text name = discr placeholder="Description"></td>
</tr>
<tr>
<td> Forsem </td>
<td> <input type = text name = forsem placeholder="Forsem"></td>
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
$sql="insert into subject values('$_POST[srno]','$_POST[class]','$_POST[subcd]','$_POST[discr]','$_POST[forsem]')";
mysql_query($sql,$cn);
echo "data stored.....";
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
echo "<center><table border=1>";
echo "<caption><h3>Subject Information</h3></caption>";
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
echo "<center><table border=1>";
echo "<caption><h3>Subject Information</h3></caption>";
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