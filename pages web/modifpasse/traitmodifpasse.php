<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Document sans nom</title>
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
$login=$_POST['log'];
$acpasse=$_POST['acpasse'];
$newpasse=$_POST['newpasse'];

 			$req="SELECT  passe  FROM passe WHERE log='$login'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);


$passe=$data['passe'];
if ($acpasse==$passe and $login!="" and $acpasse!="" and $newpasse!="")
{


 	$req="UPDATE passe SET passe='$newpasse' WHERE log='$login'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
echo "<center><h2>le mots de passe a bien etait changé</h2></center>";
}
else
{
 echo "<center><h2>le login ou le mots de passe n'est pas correct</h2></center>";
}
?>

</body>

</html>