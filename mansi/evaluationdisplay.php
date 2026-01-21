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
<form name = frm method = post action=evaluationdisplay.php>
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
echo "<caption><h3>Evaluation</h3></caption>";
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
echo "</table><br>";
echo "<input type=button name=print value=print onclick=printout()></center>";
}
}
?>