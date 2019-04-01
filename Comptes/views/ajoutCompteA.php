<?PHP
include "../entitiesCompte/CompteADMIN.php";
include "../core/CompteC.php";
if (isset($_POST['MailA']) and isset($_POST['FirstNameA']) and isset($_POST['LastNameA']) and isset($_POST['PasswordA']) and isset($_POST['RePasswordA']) and ($_POST['PasswordA'] == $_POST['RePasswordA']) and isset($_POST['MailA']) == true and empty($_POST['MailA']) == false ){

	 $email=$_POST['MailA'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)== true)
{
$Compte1=new compte($_POST['MailA'],$_POST['FirstNameA'],$_POST['LastNameA'],$_POST['PasswordA'],$_POST['RePasswordA']);
//Partie2

var_dump($Compte1);

// echo '<a href='.index.html'> </a>';
 //header('Location: indexB.html');
//  exit();

 
//Partie3
$Compte1C=new CompteC();
$Compte1C->ajouterCompte($Compte1);

//header('Location: afficherEmploye.php');
	
}else{
	echo "<script>alert(\"verifie\")</script>";

}
}

?>