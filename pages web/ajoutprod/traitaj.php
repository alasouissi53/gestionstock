<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #CCCC99;
}
-->
</style></head>

<body>

<?php
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

$logs=$_POST['log'];
$pass=$_POST['pass'];

$req = "SELECT passe FROM passe WHERE log='$logs'";
$query = mysql_query($req) or die ("il y a un probleme avec le login");
$data = mysql_fetch_array($query, MYSQL_ASSOC);

$passe=$data['passe'];
if ($pass==$passe and $pass!="" and $logs!="")
{

$link="SELECT prod FROM mois1" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;
$prod=$_POST['prod'];
$un=$_POST['un'];

			$req="SELECT quant FROM stock WHERE prod='$prod'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

   $quant1=$quant+$un;
    $req="UPDATE stock SET quant='$quant1' WHERE prod='$prod'" ;
  	 $resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute ibnsi nsi");


     echo "<center><h2>enregistrement terminé</center></h2>";
     }
     else
     {
     echo "il y a une erreur sur le mots de passe";
     }
?>
</body>

</html>