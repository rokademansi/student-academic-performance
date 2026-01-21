<html>
<head>
<script language=javascript>
function printout()
{
window.print();
}
</script>
</head>
<body>
<form name = frm method=post action=Userdisplay.php>
<center>
<input type = submit name = sbm value = display>
</form>
</body>
</html>

<?php
$cn=mysql_connect("localhost","root");;
mysql_select_db("StudentAcademicPerformance",$cn);
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
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
echo "</table><br>";
echo "<input type=button name=print value=print onclick=printout()></center>";
}
}
?>