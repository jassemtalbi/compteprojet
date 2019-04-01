<?PHP



$con=mysqli_connect("localhost","root","","compte1"); 
if (isset($_POST['MailS']))
{
	$maila=$_POST['MailS'];
	$passworda=$_POST['PasswordS'];
	$sql="select * from compter where mail='".$maila."' and password='".$passworda."'  limit 1";
	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result)==1)
	{
   // echo "<script>alert('s');</script>";
    header('Location: index.html');
    echo "<script>alert('s');</script>";

//		echo "login";
	}
	else
	{
		  //  echo "<script>alert('s');</script>";
   // header('Location: index.html');
    //echo "not,login";
		echo ("<script> alert(\"verifie votre donnes\")</script>");
 echo("<script> document.location.replace(\"index.html\")</script>");
	}
}

?>