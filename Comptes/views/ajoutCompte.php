<?PHP
include "../entitiesCompte/Compte.php";
include "../core/CompteC.php";
require_once __DIR__ . '/vendor/autoload.php';

if (isset($_POST['mail']) and isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['password']) and isset($_POST['repassword']) and ($_POST['password'] == $_POST['repassword']) and isset($_POST['mail']) == true and empty($_POST['mail']) == false ){

	 $email=$_POST['mail'];
if(filter_var($email,FILTER_VALIDATE_EMAIL)== true)
{
$Compte1=new compte($_POST['mail'],$_POST['firstname'],$_POST['lastname'],$_POST['password'],$_POST['repassword']);
//Partie2

//var_dump($Compte1);
require_once __DIR__ . '/vendor/autoload.php';


//Partie2
$fmail=$_POST['mail'];
$ffirstname=$_POST['firstname'];
$flastname=$_POST['lastname'];
$fpassword=$_POST['password'];
 $mpdf=new \Mpdf\Mpdf();
 $data='';
 $data .='<h1>your detail</h1>';
 $data .='<strong> mail</strong> ' .$fmail. '<br/>';
 $data .='<strong> first name</strong> ' .$ffirstname. '<br/>';
 $data .='<strong> last name</strong> ' .$flastname. '<br/>';
 $data .='<strong>  password</strong> ' .$fpassword. '<br/>';
 $mpdf->WriteHTML($data);
 $mpdf->Output('myfile.pdf','D');
// echo '<a href='.index.html'> </a>';
 //header('Location: index.html');
//  exit();

 
//Partie3
$Compte1C=new CompteC();
$Compte1C->ajouterCompte($Compte1);

//header('Location: afficherEmploye.php');
	
}
}
else{
	// header('Location: index.html');

 echo ("<script> alert(\"verifie votre donnes\")</script>");
 echo("<script> document.location.replace(\"index.html\")</script>");
 //header('Location: index.html');

}



?>