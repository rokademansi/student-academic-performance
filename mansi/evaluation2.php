<?php
$cn=mysql_connect("localhost","root");;
mysql_select_db("StudentAcademicPerformance",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
$sql="insert into evaluation values('$_POST[prno]','$_POST[enrlno]','$_POST[classnm]','$_POST[sbcod]','$_POST[test1]','$_POST[test2]',
                                    '$_POST[mid]','$_POST[final]','$_POST[midper]','$_POST[finper]','$_POST[diff]')";
mysql_query($sql,$cn);
echo "data stored.....";
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
$sql="delete from evaluation where prnno='$_POST[prnno]'";
mysql_query($sql,$cn);
echo "data deleted.....";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption>evaluation</caption>";
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
echo "<center><table border=1>";
echo "<caption>evaluation</caption>";
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
$sql="select * from evaluation where prnno='$_POST[prnno]'";
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
?>