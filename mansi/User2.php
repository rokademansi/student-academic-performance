<?php
$cn=mysql_connect("localhost","root");;
mysql_select_db("StudentAcademicPerformance",$cn);
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
?>