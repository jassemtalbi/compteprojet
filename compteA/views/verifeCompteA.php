<?PHP



$con=mysqli_connect("localhost","root","","compte1"); 
if (isset($_POST['mailS']))
{
	$maila=$_POST['mailS'];
	$passworda=$_POST['passwordS'];
	$sql="select * from compteadmin where MailA='".$maila."' and PasswordA='".$passworda."'  limit 1";
	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result)==1)
	{
   // echo "<script>alert('s');</script>";
    header('Location: indexB.html');
   // echo "<script>alert('s');</script>";

//		echo "login";
	}
	else
	{
		  //  echo "<script>alert('s');</script>";
    header('Location: login.html');
   // echo "not,login";
	}
}
/*$mail=$POST['mail'];
$password=$POST['password'];
$mail=stripcslashes($mail);
$password=stripcslashes($password);
//$mail=mysql_real_escape_string($mail);
//$password=mysql_real_escape_string($password);
//mysql_connect("localhost","root","");
//mysql_select_db("compte1");
$result=mysql_query("select * from compte where mail='$mail' and password='$password'")
 or die ("failed".mysql_error());
$row=mysql_fetch_array($result);
if ($row['mail']== $mail && $row['password']==$password) {
	echo"login ".$row['mail'];
}
else {
	echo "failed";
}


include "../entitiesCompte/Compte.php";
include "../core/CompteC.php";
//if (isset($_POST['mail'])  and isset($_POST['password'])  and ($_POST['mail'] == $_POST['password']) ){
//$Compte1=new compte($_POST['mail'],$_POST['password']);
//Partie2

$compteC=new CompteC();
if (($_POST['mail'] == $_POST['password'])){
	$compteC->verifieCompte();
	//header('Location: afficherEmploye.php');
var_dump($compteC);


//Partie3
//$Compte1C=new CompteC();
//$Compte1C->ajouterCompte($Compte1);
//header('Location: afficherEmploye.php');
}else{
	echo "vérifier les champs";
}

*/
?>