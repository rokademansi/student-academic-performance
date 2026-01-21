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
<form name = frm method = post action=evaluation3.php>
<center>
<table>
<caption><h3>Evaluation</h3></caption>
<tr>
<td> PRN no </td>
<td> <input type = text name = prno placeholder="PRN No" onkeypress="return valid1()"><br></td>
</tr>
<tr>
<td> Enroll no </td>
<td> <input type = text name = enrlno placeholder="Enroll no" onkeypress="return valid1()"><br></td>
</tr>
<tr>
<td> Class name </td>
<td> <input type = text name = classnm placeholder="Class name"></td>
</tr>
<tr>
<td> Subject code </td>
<td> <input type = text name = sbcod placeholder="Subject code"></td>
</tr>
<tr>
<td> Test-1 </td>
<td> <input type = number name = test1 placeholder="Test-1"><br></td>
</tr>
<tr>
<td> Test-2 </td>
<td> <input type = number name = test2 placeholder="Test-2"><br></td>
</tr>
<tr>
<td> Middle Exam </td>
<td> <input type = number name = mid placeholder="Middle Exam"><br></td>
</tr>
<tr>
<td> Final Exam </td>
<td> <input type = number name = final placeholder="Final Exam"><br></td>
</tr>
<tr>
<td> Middle percentage </td>
<td> <input type = number name = midper placeholder="Middle percentage"><br></td>
</tr>
<tr>
<td> Final percentage </td>
<td> <input type = number name = finper placeholder="Final percentage"><br></td>
</tr>
<tr>
<td> Difference </td>
<td> <input type = number name = diff placeholder="Difference"><br></td>
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
$sql="delete from evaluation where prnno='$_POST[prno]'";
mysql_query($sql,$cn);
echo "data deleted.....";
}
else
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
echo "</table></center>";
}
else
if($sb=="search")
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