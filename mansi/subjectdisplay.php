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
<form name = frm method = post action=subjectdisplay.php>
<center>
<input type = submit name = sbm value = display>
</center>
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
echo "</table><br>";
echo "<input type=button name=print value=print onclick=printout()></center>";
}
}
?>