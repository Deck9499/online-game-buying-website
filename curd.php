
<html>  
<head>  
</head>  
<body bgcolor="pink">  
<table sbgcolor="skyblue" border="2">  
<form method="post">  
<tr>  
<td colspan=2 align="center">Employee Table</td>  
</tr>  
<td>Name</td><td><input type="text" name="txt1"></td>  
 
<tr>  
<td>Designation</td><td><input type="text" name="txt2"></td>  
</tr>  
<tr>  
<td>Sal</td><td><input type="text" name="txt3"></td>  
</tr>  
<tr>  
<td>Qualification</td><td><input type="text" name="txt4"></td>  
</tr>  
<tr>  
<td><input type="submit" name="inser" value="Insert">  
<input type="submit" name="sel" value="Select">
<input type="submit" name="del" value="Delete">
<input type="submit" name="updt" value="update"></td>

</tr>  
</form>  
</table>  
</body>  
</html>  
<?php  
$conn=mysqli_connect("localhost","root",""); 
mysqli_select_db($conn,"student");  
@$a=$_POST['txt1'];  
@$b=$_POST['txt2'];  
@$c=$_POST['txt3'];  
@$d=$_POST['txt4'];  
if(@$_POST['inser'])  
{  
 $s="insert into employee values ('$a','$b','$c','$d')";  
 
 mysqli_query($conn,$s); 
echo "Your Data Inserted";  
}  
//$con=mysql_connect ("localhost","root","");  
//mysql_select_db ("mcn",$con);  
if(@$_POST ['sel'])  
{ 
   $name=$_POST['txt1'];
   echo $name;
   if ($name=="")
      $ins=mysqli_query($conn,"select * from employee");
     else
      $ins=mysqli_query($conn,"select * from employee where Name='$name'");
echo"<br><br><br>";
echo "<table bgcolor=skyblue border='2'>  
   <tr>  
   <th colspan=4>Select Data From Employee Table</th></tr>  
   <tr>  
   <th>Nmae</th>  
   <th>Designation</th>  
   <th>Sal</th>  
   <th>Qualification</th>  
   </tr>";  
   while ($row=mysqli_fetch_array($ins)) 
   {  
   echo "<tr>";  
   echo  "<th>".$row ['Name']."</th>";  
   echo  "<th>". $row ['Designation']. "</th>";  
   echo  "<th>". $row ['Sal']."</th>";  
   echo  "<th>".$row ['Qualification']."</th>";  
   echo "</tr>";  
   }  
   }  
 echo "</table>";
if(@$_POST['del'])  
{  
	$name=$_POST['txt1'];  
 	$s="DELETE FROM employee WHERE name='$name'"; 
 
 mysqli_query($conn,$s); 
echo "Your Data updated";  
}  
if(@$_POST['updt'])  
{  
	$name=$_POST['txt1'];  
$sal=$_POST['txt3']; 
 	$s="UPDATE employee SET name='$name' WHERE sal ='$sal'"; 
 
 mysqli_query($conn,$s); 
echo "Your Data updated";  
}    
?>  
