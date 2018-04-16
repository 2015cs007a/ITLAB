

<?php @

$form_username=$_POST['username'];
$form_password=$_POST['password'];
$dbc=mysqli_connect('localhost','root','tiger','afreen')or die('error connecting to mysql server');
$query="Select * from login where username=\"$form_username\"";

$result=mysqli_query($dbc,$query)or die('error querying database');

$row=mysqli_fetch_array($result);
if($form_password==$row['password'])
echo "Welcome,"."$form_username"."<br>";
else{
header("Location:naz.html");
echo "<br/>";}
echo "successfully connected.";

mysqli_close($dbc);

?>
